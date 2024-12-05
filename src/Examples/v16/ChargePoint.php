<?php

require __DIR__ . '/../../../vendor/autoload.php';

use SolutionForest\OcppPhp\Ocpp\JsonSchemaValidator;
use SolutionForest\OcppPhp\Ocpp\v16\Calls;

function chargerPoingCallback($client)
{
    echo "Charge Point: Connected to Central System\n\n";

    $boot = new Calls\BootNotification();
    $boot->chargePointVendor = 'MyVendor';
    $boot->chargePointModel = 'MyModel';

    $heartbeat = new Calls\Heartbeat();

    $statusNotification = new Calls\StatusNotification();
    $statusNotification->connectorId = 1;
    $statusNotification->status = 'Available';
    $statusNotification->errorCode = 'NoError';

    $notImplemented = new Calls\ClearCache();

    $messages = [
        $boot,
        $heartbeat,
        $statusNotification,
        $notImplemented
    ];


    $message = $messages[rand(0, count($messages) - 1)];

    JsonSchemaValidator::validate($message, 'v1.6');
    $message = $message->toArray();

    echo "Charge Point: Sending message: " . json_encode($message) . "\n\n";
    $client->text(json_encode($message));
}


echo "# Random client\n";

// Initiate client.
while (true) {
    // Server options specified or random
    $options = array_merge([
        'uri' => 'ws://127.0.0.1:8080',
        'timeout' => rand(1, 60),
        'framesize' => rand(1, 4096) * 8,
    ], getopt('', ['uri:', 'timeout:', 'framesize:', 'debug']));

    try {
        $client = new WebSocket\Client($options['uri']);
        $client
            ->addMiddleware(new \WebSocket\Middleware\CloseHandler())
            ->addMiddleware(new \WebSocket\Middleware\PingResponder())
        ;

        // If debug mode and logger is available
        if (isset($options['debug']) && class_exists('WebSocket\Test\EchoLog')) {
            $client->setLogger(new \WebSocket\Test\EchoLog());
            echo "# Using logger\n";
        }
        if (isset($options['timeout'])) {
            $client->setTimeout($options['timeout']);
            echo "# Set timeout: {$options['timeout']}\n";
        }
        if (isset($options['framesize'])) {
            $client->setFrameSize($options['framesize']);
            echo "# Set frame size: {$options['framesize']}\n";
        }

        echo "# Listening on {$options['uri']}\n";
        $client->onHandshake(function ($server, $connection, $request, $response) {
            echo "> [{$connection->getRemoteName()}] Server connected {$response->getStatusCode()}\n";
            chargerPoingCallback($server);
        })->onDisconnect(function ($client, $connection) {
            echo "> [{$connection->getRemoteName()}] Server disconnected\n";
        })->onText(function ($client, $connection, $message) {
            echo "> [{$connection->getRemoteName()}] Received [{$message->getOpcode()}] {$message->getContent()}\n";
            echo "Charge Point: Received message\n\n";
        })->onBinary(function ($client, $connection, $message) {
            echo "> [{$connection->getRemoteName()}] Received [{$message->getOpcode()}]\n";
        })->onPing(function ($client, $connection, $message) {
            echo "> [{$connection->getRemoteName()}] Received [{$message->getOpcode()}]\n";
        })->onPong(function ($client, $connection, $message) {
            echo "> [{$connection->getRemoteName()}] Received [{$message->getOpcode()}]\n";
        })->onClose(function ($client, $connection, $message) {
            echo "> [{$connection->getRemoteName()}] Received [{$message->getOpcode()}] {$message->getCloseStatus()}\n";
        })->onError(function ($client, $connection, $exception) {
            $name = $connection ? "[{$connection->getRemoteName()}]" : "[-]";
            echo "> {$name} Error: {$exception->getMessage()}\n";
        })->start();


    } catch (Throwable $e) {
        echo "> ERROR: {$e->getMessage()}\n";
    }
}