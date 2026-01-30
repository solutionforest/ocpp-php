<?php

/**
 * Example demonstrating the factory methods for creating Call and CallResult objects
 * from raw OCPP 2.0.1 message arrays.
 * 
 * This eliminates boilerplate code when parsing incoming OCPP messages.
 */

require __DIR__ . '/../../../vendor/autoload.php';

use SolutionForest\OcppPhp\Ocpp\JsonSchemaRegistry;
use SolutionForest\OcppPhp\Ocpp\JsonSchemaValidator;
use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;

echo "=== OCPP v2.0.1 Factory Methods Example ===\n\n";

$registry = new JsonSchemaRegistry();

// ============================================
// Example 1: Create a Call from raw message array
// ============================================
echo "--- Example 1: Creating BootNotification Call from raw array ---\n";

// This is how a raw OCPP 2.0.1 BootNotification looks
$rawBootNotification = [
    2,                          // messageTypeID (2 = Call)
    "boot-001",                 // messageId
    "BootNotification",         // action
    [                           // payload (OCPP 2.0.1 format)
        "chargingStation" => [
            "model" => "ModelX",
            "vendorName" => "VendorY"
        ],
        "reason" => "PowerUp"
    ]
];

// Using Call::fromArray() static method
$bootCall = Call::fromArray($rawBootNotification, 'v2.0.1');

echo "Created BootNotification Call:\n";
echo "  - Message ID: {$bootCall->messageId}\n";
echo "  - Type: " . get_class($bootCall) . "\n";

// Validate the object
try {
    JsonSchemaValidator::validate($bootCall, 'v2.0.1');
    echo "  - Validation: PASSED\n\n";
} catch (Exception $e) {
    echo "  - Validation: {$e->getMessage()}\n\n";
}

// ============================================
// Example 2: Create a Call using the registry
// ============================================
echo "--- Example 2: Creating Heartbeat via JsonSchemaRegistry ---\n";

$rawHeartbeat = [
    2,
    "hb-001",
    "Heartbeat",
    []
];

$heartbeatCall = $registry->createFromArray($rawHeartbeat, 'v2.0.1');
echo "Created Heartbeat Call via registry\n";
echo "  - Message ID: {$heartbeatCall->messageId}\n";
echo "  - Type: " . get_class($heartbeatCall) . "\n\n";

// ============================================
// Example 3: Create a CallResult from raw message array
// ============================================
echo "--- Example 3: Creating BootNotification CallResult from raw array ---\n";

$rawBootResponse = [
    3,                          // messageTypeID (3 = CallResult)
    "boot-001",                 // messageId
    [                           // payload (OCPP 2.0.1 format)
        "status" => "Accepted",
        "currentTime" => date('c'),
        "interval" => 300
    ]
];

// For CallResult, we need to specify which action this is a response to
$bootResult = CallResult::fromArray($rawBootResponse, 'BootNotification', 'v2.0.1');

echo "Created BootNotification CallResult:\n";
echo "  - Status: {$bootResult->status}\n";
echo "  - Interval: {$bootResult->interval}\n";
echo "  - Message ID: {$bootResult->messageId}\n\n";

// ============================================
// Example 4: StatusNotification (v2.0.1 format)
// ============================================
echo "--- Example 4: StatusNotification in v2.0.1 format ---\n";

$rawStatusNotification = [
    2,
    "status-001",
    "StatusNotification",
    [
        "timestamp" => date('c'),
        "connectorStatus" => "Available",
        "evseId" => 1,
        "connectorId" => 1
    ]
];

$statusCall = Call::fromArray($rawStatusNotification, 'v2.0.1');
echo "Created StatusNotification Call:\n";
echo "  - Type: " . get_class($statusCall) . "\n";
echo "  - Message ID: {$statusCall->messageId}\n\n";

// ============================================
// Example 5: Handling unknown message types
// ============================================
echo "--- Example 5: Error handling for unknown actions ---\n";

try {
    $unknownMessage = [2, "msg-999", "UnknownAction", []];
    Call::fromArray($unknownMessage, 'v2.0.1');
} catch (Exception $e) {
    echo "Caught expected error: {$e->getMessage()}\n\n";
}

// ============================================
// Example 6: Full workflow simulation
// ============================================
echo "--- Example 6: Full workflow simulation ---\n";

// Step 1: Receive raw JSON from WebSocket
$incomingJson = '[2, "trans-001", "TransactionEvent", {"eventType": "Started", "timestamp": "2026-01-30T12:00:00Z", "triggerReason": "Authorized", "seqNo": 0, "transactionInfo": {"transactionId": "tx-123"}}]';
echo "1. Received: {$incomingJson}\n";

// Step 2: Parse JSON
$rawMessage = json_decode($incomingJson, true);

// Step 3: Create typed object
$transactionCall = Call::fromArray($rawMessage, 'v2.0.1');
echo "2. Parsed into: " . get_class($transactionCall) . "\n";

// Step 4: Access typed properties (if they exist on the class)
echo "3. Message ID: {$transactionCall->messageId}\n";

// Step 5: Convert back for response
$responseArray = $transactionCall->toArray();
echo "4. Serialized: " . json_encode($responseArray) . "\n\n";

echo "=== Example Complete ===\n";
