<?php

require __DIR__ . '/../vendor/autoload.php';

use React\EventLoop\Factory;
use React\EventLoop\Loop;
use React\Socket\SocketServer;
use React\Socket\ConnectionInterface;
use SolutionForest\OocpPhp\Exceptions\NotImplementedError;
use SolutionForest\OocpPhp\v201\Calls;
use SolutionForest\OocpPhp\v201\CallResults;

// Helper function to parse JSON messages (very basic)
function parseJsonMessage($data)
{
    $data = trim($data);
    return json_decode($data, true) ?? null;
}

// Central System (Server)

$loop = Loop::get();
$socket = new SocketServer('0.0.0.0:8080', [], $loop);

$socket->on('connection', function (ConnectionInterface $connection) {
    $connection->write("Hello " . $connection->getRemoteAddress() . "!\n\n");

    echo "Central System: New connection from Charge Point\n\n";


    $connection->on('data', function ($data) use ($connection) {
        echo "Central System: Received message\n\n'";
        echo $data . "\n\n";

        $message = parseJsonMessage($data);

        if ($message === null) {
            $connection->write('{"error": "Invalid JSON"}' . "\n\n");
            return;
        }

        $call = $message['action'];

        $callResult = 'SolutionForest\OocpPhp\v201\CallResults\\' . $call;

        if (!class_exists($callResult)) {
            $connection->write('{"error": "Unknown call"}' . "\n\n");
            return;
        }

        $callResult = new $callResult($message['messageId']);

        switch ($callResult::class) {
            case CallResults\BootNotification::class:
                $callResult->status = 'Accepted';
                $callResult->currentTime = date('c');
                $callResult->interval = 60;
                break;
            case CallResults\Heartbeat::class:
                $callResult->currentTime = date('c');
                break;
            case CallResults\StatusNotification::class:
                break;
            default:
                $callResult = new NotImplementedError($message['messageId']);
                break;
        }

        $response = $callResult->toArray();
        echo "Central System: Sending response: " . json_encode($response) . "\n\n";

        $connection->write(json_encode($response) . "\n");
    });


    $connection->on('end', function () {
        echo "Central System: ended\n\n";
    });

    $connection->on('error', function (Exception $e) {
        echo 'error: ' . $e->getMessage();
    });

    $connection->on('close', function () {
        echo "Central System: Connection closed\n\n";
    });
});
