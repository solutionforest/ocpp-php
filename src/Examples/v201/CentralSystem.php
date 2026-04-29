<?php

use SolutionForest\OcppPhp\Ocpp\Exceptions\NotImplementedError;
use SolutionForest\OcppPhp\Ocpp\JsonSchemaValidator;
use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;
use SolutionForest\OcppPhp\Ocpp\v201\CallResults\Heartbeat;
use SolutionForest\OcppPhp\Ocpp\v201\CallResults\StatusNotification;
use SolutionForest\OcppPhp\Ocpp\v201\CallResults\BootNotification;

require __DIR__ . '/../../../vendor/autoload.php';

if (!class_exists('WebSocket\Server')) {
    throw new Exception("phrity/websocket is required for examples. Run: composer require phrity/websocket");
}

function websocketObject(string $class, mixed ...$args): object
{
    if (!class_exists($class)) {
        throw new Exception("Missing required WebSocket class: {$class}");
    }

    return new $class(...$args);
}

function sendWebSocketText($target, string $payload): void
{
    $target->send(websocketObject('WebSocket\\Message\\Text', $payload));
}

function sendWebSocketPing($target): void
{
    $target->send(websocketObject('WebSocket\\Message\\Ping'));
}

function sendWebSocketClose($target): void
{
    $target->send(websocketObject('WebSocket\\Message\\Close'));
}

function addWebSocketMiddleware($server, string $middlewareClass): void
{
    $server->addMiddleware(websocketObject($middlewareClass));
}


// Helper function to parse JSON messages (very basic)
function parseJsonMessage($data)
{
    $message = json_decode(trim($data), true);

    if (!is_array($message) || !isset($message[0], $message[1], $message[2])) {
        return null;
    }

    return [
        'messageTypeID' => $message[0],
        'uniqueId' => $message[1],
        'action' => $message[2],
        'payload' => $message[3] ?? [],
    ];
}

function centralCallBack( $data , $connection ) {
        echo "Central System: Received message\n\n";
        echo $data . "\n\n";

        $message = parseJsonMessage($data);

        if ($message === null) {
            sendWebSocketText($connection, '{"error": "Invalid JSON"}' . "\n\n");
            return;
        }

        $call = $message['action'];

        $callResult = 'SolutionForest\OcppPhp\Ocpp\v201\CallResults\\' . $call;

        if (!class_exists($callResult)) {
            sendWebSocketText($connection, '{"error": "Unknown call"}' . "\n\n");
            return;
        }

        $callResult = new $callResult($message['uniqueId']);

        switch ($callResult::class) {
            case BootNotification::class:
                $callResult->status = 'Accepted';
                $callResult->currentTime = date('c');
                $callResult->interval = 60;
                break;
            case Heartbeat::class:
                $callResult->currentTime = date('c');
                break;
            case StatusNotification::class:
                break;
            default:
                $callResult = new NotImplementedError($message['uniqueId']);
                break;
        }

        if ($callResult instanceof CallResult) {
            JsonSchemaValidator::validate($callResult, 'v2.0.1');
        }
        $response = $callResult->toArray();
        echo "Central System: Sending response: " . json_encode($response) . "\n\n";

        sendWebSocketText($connection, json_encode($response));
}


echo "# Echo server! [Central System (Server)]\n";

// Server options specified or default
$options = array_merge([
    'port'  => 8080,
], getopt('', ['port:', 'ssl', 'timeout:', 'framesize:', 'connections:', 'debug']));

// Initiate server.
try {
    $server = new WebSocket\Server($options['port'], isset($options['ssl']));
    addWebSocketMiddleware($server, 'WebSocket\\Middleware\\CloseHandler');
    addWebSocketMiddleware($server, 'WebSocket\\Middleware\\PingResponder');

    // If debug mode and logger is available
    if (isset($options['debug']) && class_exists('WebSocket\Test\EchoLog')) {
        $server->setLogger(new \WebSocket\Test\EchoLog());
        echo "# Using logger\n";
    }
    if (isset($options['timeout'])) {
        $server->setTimeout($options['timeout']);
        echo "# Set timeout: {$options['timeout']}\n";
    }
    if (isset($options['framesize'])) {
        $server->setFrameSize($options['framesize']);
        echo "# Set frame size: {$options['framesize']}\n";
    }
    if (isset($options['connections'])) {
        $server->setMaxConnections($options['connections']);
        echo "# Set max connections: {$options['connections']}\n";
    }

    echo "# Listening on port {$server->getPort()}\n";
    $server->onHandshake(function ($server, $connection, $request, $response) {
        echo "> [{$connection->getRemoteName()}] Client connected {$request->getUri()}\n";
    })->onDisconnect(function ($server, $connection) {
        echo "> [{$connection->getRemoteName()}] Client disconnected\n";
    })->onText(function ($server, $connection, $message) {
        echo "> [{$connection->getRemoteName()}] Received [{$message->getOpcode()}] {$message->getContent()}\n";
        switch ($message->getContent()) {
            // Connection commands
            case '@close':
                echo "< [{$connection->getRemoteName()}] Sending Close\n";
                sendWebSocketClose($connection);
                break;
            case '@ping':
                echo "< [{$connection->getRemoteName()}] Sending Ping\n";
                sendWebSocketPing($connection);
                break;
            case '@disconnect':
                echo "< [{$connection->getRemoteName()}] Disconnecting\n";
                $connection->disconnect();
                break;
            case '@info':
                $msg = "Connection info:\n";
                $msg .= "  - Local:       {$connection->getName()}\n";
                $msg .= "  - Remote:      {$connection->getRemoteName()}\n";
                $msg .= "  - Request:     {$connection->getHandshakeRequest()->getUri()}\n";
                $msg .= "  - Response:    {$connection->getHandshakeResponse()->getStatusCode()}\n";
                $msg .= "  - Connected:   " . json_encode($connection->isConnected()) . "\n";
                $msg .= "  - Readable:    " . json_encode($connection->isReadable()) . "\n";
                $msg .= "  - Writable:    " . json_encode($connection->isWritable()) . "\n";
                $msg .= "  - Timeout:     {$connection->getTimeout()}s\n";
                $msg .= "  - Frame size:  {$connection->getFrameSize()}b\n";
                echo "< [{$connection->getRemoteName()}] {$msg}";
                sendWebSocketText($server, $msg);
                break;

            // Server commands
            case '@server-stop':
                echo "< [{$connection->getRemoteName()}] Stop server\n";
                $server->stop();
                break;
            case '@server-shutdown':
                echo "< [{$connection->getRemoteName()}] Shutdown server\n";
                $server->shutdown();
                break;
            case '@server-close':
                echo "< [{$connection->getRemoteName()}] Broadcast Close\n";
                sendWebSocketClose($server);
                break;
            case '@server-ping':
                echo "< [{$connection->getRemoteName()}] Broadcast Ping\n";
                sendWebSocketPing($server);
                break;
            case '@server-disconnect':
                echo "< [{$connection->getRemoteName()}] Disconnecting server\n";
                $server->disconnect();
                break;
            case '@server-info':
                $msg = "Server info:\n";
                $msg .= "  - Running:     " . json_encode($server->isRunning()) . "\n";
                $msg .= "  - Connections: {$server->getConnectionCount()}\n";
                $msg .= "  - Port:        {$server->getPort()}\n";
                $msg .= "  - Scheme:      {$server->getScheme()}\n";
                $msg .= "  - Timeout:     {$server->getTimeout()}s\n";
                $msg .= "  - Frame size:  {$server->getFrameSize()}b\n";
                echo "< [{$connection->getRemoteName()}] {$msg}";
                sendWebSocketText($server, $msg);
                break;

            // Echo received message
            default:
                centralCallBack($message->getContent(), $connection);
                echo "< [{$connection->getRemoteName()}] Sent [{$message->getOpcode()}] {$message->getContent()}\n";
        }
    })->onBinary(function ($server, $connection, $message) {
        echo "> [{$connection->getRemoteName()}] Received [{$message->getOpcode()}]\n";
        $connection->send($message); // Echo
        echo "< [{$connection->getRemoteName()}] Sent [{$message->getOpcode()}] {$message->getContent()}\n";
    })->onPing(function ($server, $connection, $message) {
        echo "> [{$connection->getRemoteName()}] Received [{$message->getOpcode()}] {$message->getContent()}\n";
    })->onPong(function ($server, $connection, $message) {
        echo "> [{$connection->getRemoteName()}] Received [{$message->getOpcode()}] {$message->getContent()}\n";
    })->onClose(function ($server, $connection, $message) {
        echo "> [{$connection->getRemoteName()}] Received [{$message->getOpcode()}] "
            . "{$message->getCloseStatus()} {$message->getContent()}\n";
    })->onError(function ($server, $connection, $exception) {
        echo "> Error: {$exception->getMessage()}\n";
    })->start();
} catch (\Throwable $e) {
    echo "# ERROR: {$e->getMessage()}\n";
}