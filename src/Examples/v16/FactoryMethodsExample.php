<?php

/**
 * Example demonstrating the factory methods for creating Call and CallResult objects
 * from raw OCPP message arrays.
 * 
 * This eliminates boilerplate code when parsing incoming OCPP messages.
 */

require __DIR__ . '/../../../vendor/autoload.php';

use SolutionForest\OcppPhp\Ocpp\JsonSchemaRegistry;
use SolutionForest\OcppPhp\Ocpp\JsonSchemaValidator;
use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;

echo "=== OCPP v1.6 Factory Methods Example ===\n\n";

$registry = new JsonSchemaRegistry();

// ============================================
// Example 1: Create a Call from raw message array
// ============================================
echo "--- Example 1: Creating Call from raw array ---\n";

// This is how a raw OCPP Call message looks when received via WebSocket
$rawBootNotification = [
    2,                          // messageTypeID (2 = Call)
    "19223201",                 // UniqueId
    "BootNotification",         // action
    [                           // payload
        "chargePointVendor" => "VendorX",
        "chargePointModel" => "ModelY",
        "chargePointSerialNumber" => "SN123456",
        "firmwareVersion" => "1.0.0"
    ]
];

// Using Call::fromArray() static method
/** @var \SolutionForest\OcppPhp\Ocpp\v16\Calls\BootNotification $bootCall */
$bootCall = Call::fromArray($rawBootNotification, 'v1.6');

echo "Created BootNotification Call:\n";
echo "  - Vendor: {$bootCall->chargePointVendor}\n";
echo "  - Model: {$bootCall->chargePointModel}\n";
echo "  - Serial: {$bootCall->chargePointSerialNumber}\n";
echo "  - Unique ID: {$bootCall->uniqueId}\n";

// Validate the object
JsonSchemaValidator::validate($bootCall, 'v1.6');
echo "  - Validation: PASSED\n\n";

// ============================================
// Example 2: Create a Call using the registry
// ============================================
echo "--- Example 2: Creating Call via JsonSchemaRegistry ---\n";

$rawHeartbeat = [
    2,
    "19223202",
    "Heartbeat",
    []
];

$heartbeatCall = $registry->createFromArray($rawHeartbeat, 'v1.6');
echo "Created Heartbeat Call via registry\n";
echo "  - Unique ID: {$heartbeatCall->uniqueId}\n";
echo "  - Type: " . get_class($heartbeatCall) . "\n\n";

// ============================================
// Example 3: Create a Call with constructor payload
// ============================================
echo "--- Example 3: Creating Call with constructor payload ---\n";

use SolutionForest\OcppPhp\Ocpp\v16\Calls\StatusNotification;

$statusCall = new StatusNotification([
    'connectorId' => 1,
    'status' => 'Available',
    'errorCode' => 'NoError',
    'timestamp' => date('c')
]);

echo "Created StatusNotification with constructor payload:\n";
echo "  - Connector ID: {$statusCall->connectorId}\n";
echo "  - Status: {$statusCall->status}\n";
echo "  - Error Code: {$statusCall->errorCode}\n\n";

// ============================================
// Example 4: Create a CallResult from raw message array
// ============================================
echo "--- Example 4: Creating CallResult from raw array ---\n";

// This is how a raw OCPP CallResult message looks when received
$rawBootResponse = [
    3,                          // messageTypeID (3 = CallResult)
    "19223201",                 // UniqueId (matches the original Call)
    [                           // payload
        "status" => "Accepted",
        "currentTime" => date('c'),
        "interval" => 300
    ]
];

// For CallResult, we need to specify which action this is a response to
/** @var \SolutionForest\OcppPhp\Ocpp\v16\CallResults\BootNotification $bootResult */
$bootResult = CallResult::fromArray($rawBootResponse, 'BootNotification', 'v1.6');

echo "Created BootNotification CallResult:\n";
echo "  - Status: {$bootResult->status}\n";
echo "  - Interval: {$bootResult->interval}\n";
echo "  - Unique ID: {$bootResult->uniqueId}\n";

// Validate the object
JsonSchemaValidator::validate($bootResult, 'v1.6');
echo "  - Validation: PASSED\n\n";

// ============================================
// Example 5: Using registry for CallResult
// ============================================
echo "--- Example 5: Creating CallResult via JsonSchemaRegistry ---\n";

$rawHeartbeatResponse = [
    3,
    "19223202",
    [
        "currentTime" => date('c')
    ]
];

// When using the registry, pass the action as third parameter
/** @var \SolutionForest\OcppPhp\Ocpp\v16\CallResults\Heartbeat $heartbeatResult */
$heartbeatResult = $registry->createFromArray($rawHeartbeatResponse, 'v1.6', 'Heartbeat');
echo "Created Heartbeat CallResult via registry\n";
echo "  - Current Time: {$heartbeatResult->currentTime}\n";
echo "  - Type: " . get_class($heartbeatResult) . "\n\n";

// ============================================
// Example 6: Full round-trip simulation
// ============================================
echo "--- Example 6: Full round-trip simulation ---\n";

// Simulate receiving a raw message (as if from WebSocket)
$incomingJson = '[2, "msg-001", "MeterValues", {"connectorId": 1, "meterValue": []}]';
$incomingMessage = json_decode($incomingJson, true);

echo "Received raw JSON: {$incomingJson}\n";

// Parse into typed object
$meterValuesCall = Call::fromArray($incomingMessage, 'v1.6');
echo "Parsed into: " . get_class($meterValuesCall) . "\n";

// Convert back to array for sending
$outgoingArray = $meterValuesCall->toArray();
$outgoingJson = json_encode($outgoingArray);
echo "Converted back to JSON: {$outgoingJson}\n\n";

echo "=== Example Complete ===\n";
