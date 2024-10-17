<?php

namespace SolutionForest\OcppPhp\Ocpp;

use SolutionForest\OcppPhp\Ocpp\Exceptions\FormatViolationError;
use SolutionForest\OcppPhp\Ocpp\Exceptions\ProtocolError;
use SolutionForest\OcppPhp\Ocpp\Exceptions\TypeConstraintViolationError;
use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\Messages\CallError;
use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;

class JsonSchemaValidator
{
    public static function validate(Call|CallResult|array $message, string $version, bool $throwException = true): bool|CallError
    {
        $registry = new JsonSchemaRegistry();
        $schema = $registry->getSchema($message, $version);
        $payload = is_array($message) ? $message['payload'] : $message->getPayload();
        $payload = (object) $payload;

        $validator = new \JsonSchema\Validator();
        $validator->validate($payload, $schema);


        if (!$validator->isValid() && $throwException) {
            foreach ($validator->getErrors() as $error) {
                switch ($error['constraint']) {
                    case 'type':
                        throw new \Exception("TypeConstraintViolationError: " . $error['message']);
                    case 'additionalProperties':
                        throw new \Exception("FormatViolationError: " . $error['message']);
                    case 'required':
                        throw new \Exception("ProtocolError: " . $error['message']);
                    case 'maxLength':
                        throw new \Exception("TypeConstraintViolationError: " . $error['message']);
                    default:
                        $name = $error['property'];
                        throw new \Exception("FormatViolationError: Payload {$name} is not valid: " . $error['message']);
                }
            }
        }


        if (!$validator->isValid()) {
            foreach ($validator->getErrors() as $error) {

                $messageId = $message['messageId'] ?? null;
                $errorDetails = $error['message'];


                switch ($error['constraint']) {
                    case 'type':
                        return new TypeConstraintViolationError($messageId, null, null, [$errorDetails]);
                    case 'additionalProperties':
                        return new FormatViolationError($messageId, null, null, [$errorDetails]);
                    case 'required':
                        return new ProtocolError($messageId, null, null, [$errorDetails]);
                    case 'maxLength':
                        return new TypeConstraintViolationError($messageId, null, null, [$errorDetails]);
                    default:
                        $name = $error['property'];
                        $errorDetails = "Payload {$name} is not valid: " . $error['message'];
                        return new FormatViolationError($messageId, null, null, [$errorDetails]);
                }
            }
        }

        return $validator->isValid();
    }
}
