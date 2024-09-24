<?php

use React\Socket\ConnectionInterface;

require 'vendor/autoload.php';

$socket = new React\Socket\SocketServer('127.0.0.1:8000');

$socket->on('connection', function (React\Socket\ConnectionInterface $connection) {
    $connection->write("Hello " . $connection->getRemoteAddress() . "!\n");
    

    cp = ChargePoint(charge_point_id, websocket)

    await cp.start()

    $connection->on('data', function ($data) use ($connection) {
        $connection->close();
    });
});
