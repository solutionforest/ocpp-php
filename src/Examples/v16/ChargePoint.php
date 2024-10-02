<?php

require __DIR__ . '/../vendor/autoload.php';


use React\Socket\ConnectionInterface;
use React\EventLoop\Factory;
use React\EventLoop\Loop;
use React\Socket\SocketServer;
use SolutionForest\OocpPhp\v16\Messages\Calls;

$loop = Loop::get();
$connector = new \React\Socket\Connector($loop);
$connector->connect('127.0.0.1:8080')
    ->then(function (ConnectionInterface $connection) {
        $connection->on('data', function ($data) {
            echo "Charge Point: Received message\n\n";
            echo $data;
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


        echo "Charge Point: Connected to Central System\n\n";

        $boot = new Calls\BootNotification();
        $boot->chargePointVendor = 'MyVendor';
        $boot->chargePointModel = 'MyModel';

        $heartbeat = new Calls\Heartbeat();

        $statusNotification = new Calls\StatusNotification();
        $statusNotification->connectorId = 1;
        $statusNotification->status = 'Available';

        $notImplemented = new Calls\ClearCache();

        $messages = [
            $boot,
            $heartbeat,
            $statusNotification,
            $notImplemented
        ];


        $message = $messages[rand(0, count($messages) - 1)];

        $message = new Calls\CancelReservation();
        $message = $message->toArray();

        echo "Charge Point: Sending message: " . json_encode($message) . "\n\n";
        $connection->write(json_encode($message) . "\n");
    }, function (\Exception $e) {
        echo "Charge Point: Connection failed: " . $e->getMessage() . "\n\n";
    });
