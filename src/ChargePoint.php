<?php

class ChargePoint
{
    private $id;
    private $connection;
    private $responseTimeout;
    private $routeMap;
    private $responseQueue;
    private $uniqueIdGenerator;

    public function __construct($id, $connection, $responseTimeout = 30)
    {
        $this->id = $id;
        $this->connection = $connection;
        $this->responseTimeout = $responseTimeout;
        $this->routeMap = $this->createRouteMap();
        $this->responseQueue = new SplQueue();
        $this->uniqueIdGenerator = function () {
            return uniqid();
        };
    }

    public function start()
    {
        while (true) {
            $message = $this->connection->recv();
            $this->routeMessage($message);
        }
    }

    private function routeMessage($rawMsg)
    {
        $msg = $this->unpack($rawMsg);

        if ($msg->messageTypeId === MessageType::CALL) {
            $this->handleCall($msg);
        } elseif (in_array($msg->messageTypeId, [MessageType::CALL_RESULT, MessageType::CALL_ERROR])) {
            $this->responseQueue->enqueue($msg);
        }
    }

    private function handleCall($msg)
    {
        try {
            $handlers = $this->routeMap[$msg->action];

            if (!$handlers['_skip_schema_validation']) {
                $this->validatePayload($msg);
            }

            $snakeCasePayload = $this->camelToSnakeCase($msg->payload);

            $handler = $handlers['_on_action'];
            $response = $handler($snakeCasePayload);

            $responsePayload = $this->removeNones($this->serializeAsDict($response));
            $camelCasePayload = $this->snakeToCamelCase($responsePayload);

            $response = $msg->createCallResult($camelCasePayload);

            if (!$handlers['_skip_schema_validation']) {
                $this->validatePayload($response);
            }

            $this->send($response->toJson());

            if (isset($handlers['_after_action'])) {
                $afterHandler = $handlers['_after_action'];
                $afterHandler($snakeCasePayload);
            }
        } catch (Exception $e) {
            $errorResponse = $msg->createCallError($e)->toJson();
            $this->send($errorResponse);
        }
    }

    public function call($payload, $suppress = true, $uniqueId = null, $skipSchemaValidation = false)
    {
        $camelCasePayload = $this->snakeToCamelCase($this->serializeAsDict($payload));

        $uniqueId = $uniqueId ?? ($this->uniqueIdGenerator)();

        $actionName = get_class($payload);
        if (strpos($actionName, 'Payload') !== false) {
            $actionName = substr($actionName, 0, -7);
        }

        $call = new Call($uniqueId, $actionName, $this->removeNones($camelCasePayload));

        if (!$skipSchemaValidation) {
            $this->validatePayload($call);
        }

        $this->send($call->toJson());

        $response = $this->getSpecificResponse($call->uniqueId, $this->responseTimeout);

        if ($response->messageTypeId === MessageType::CALL_ERROR) {
            if ($suppress) {
                return null;
            }
            throw $response->toException();
        } elseif (!$skipSchemaValidation) {
            $response->action = $call->action;
            $this->validatePayload($response);
        }

        $snakeCasePayload = $this->camelToSnakeCase($response->payload);
        $cls = $this->getCallResultClass($payload);
        return new $cls($snakeCasePayload);
    }

    private function getSpecificResponse($uniqueId, $timeout)
    {
        $waitUntil = time() + $timeout;

        while (true) {
            if ($this->responseQueue->isEmpty()) {
                if (time() > $waitUntil) {
                    throw new Exception("Timeout waiting for response");
                }
                usleep(100000);  // Sleep for 100ms
                continue;
            }

            $response = $this->responseQueue->dequeue();

            if ($response->uniqueId === $uniqueId) {
                return $response;
            }

            if (time() > $waitUntil) {
                throw new Exception("Timeout waiting for response");
            }
        }
    }

    private function send($message)
    {
        $this->connection->send($message);
    }

    // Other helper methods like camelToSnakeCase, snakeToCamelCase, 
    // removeNones, serializeAsDict, validatePayload, etc. would need to be implemented here
}
