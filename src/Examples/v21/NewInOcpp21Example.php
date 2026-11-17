<?php

/**
 * What is new in OCPP 2.1 compared to 2.0.1, shown with a periodic event stream:
 *
 *   1. A message that only exists in 2.1 (OpenPeriodicEventStream)
 *   2. SEND (messageTypeId 6): a one-way message, never answered
 *   3. CALLRESULTERROR (messageTypeId 5): an error about a received CALLRESULT
 *
 * Everything else works exactly as in the v2.0.1 examples, with version 'v2.1'
 * and classes from the SolutionForest\OcppPhp\Ocpp\v21 namespace.
 */

require __DIR__ . '/../../../vendor/autoload.php';

use SolutionForest\OcppPhp\Ocpp\JsonSchemaRegistry;
use SolutionForest\OcppPhp\Ocpp\JsonSchemaValidator;
use SolutionForest\OcppPhp\Ocpp\Messages\MessageTypeId;
use SolutionForest\OcppPhp\Ocpp\Messages\Send;
use SolutionForest\OcppPhp\Ocpp\v21\CallResults\OpenPeriodicEventStream as OpenPeriodicEventStreamResult;
use SolutionForest\OcppPhp\Ocpp\v21\Calls\OpenPeriodicEventStream;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\GenericStatus;

$registry = new JsonSchemaRegistry();

echo "=== New in OCPP 2.1 ===\n\n";

// --------------------------------------------
// 1. A 2.1-only message: the Charging Station asks to open a stream
//    for a variable monitor (sampled every 10 seconds).
// --------------------------------------------
echo "--- 1. OpenPeriodicEventStream (new in 2.1) ---\n";

$open = new OpenPeriodicEventStream([
    'constantStreamData' => [
        'id' => 1,
        'variableMonitoringId' => 42,
        'params' => ['interval' => 10],
    ],
]);
JsonSchemaValidator::validate($open, 'v2.1');
echo "CS -> CSMS: " . json_encode($open->toArray()) . "\n";

$accepted = new OpenPeriodicEventStreamResult($open->uniqueId, ['status' => GenericStatus::Accepted]);
JsonSchemaValidator::validate($accepted, 'v2.1');
echo "CSMS -> CS: " . json_encode($accepted->toArray()) . "\n\n";

// --------------------------------------------
// 2. SEND: the stream data itself. One-way, the CSMS MUST NOT reply.
// --------------------------------------------
echo "--- 2. SEND (messageTypeId 6) ---\n";

$raw = [6, 'stream-1-001', 'NotifyPeriodicEventStream', [
    'id' => 1,                                   // stream id from step 1
    'pending' => 0,                              // values still queued on the station
    'basetime' => '2026-11-17T10:00:00Z',
    'data' => [
        ['t' => 0, 'v' => '230.4'],              // t: seconds after basetime (decimals allowed)
        ['t' => 10.5, 'v' => '229.8'],
    ],
]];

$send = $registry->createFromArray($raw, 'v2.1');
JsonSchemaValidator::validate($send, 'v2.1');

echo "Received " . get_class($send) . "\n";
if ($send instanceof Send) {
    echo "It is a SEND: process it, do not answer.\n\n";
}

// --------------------------------------------
// 3. CALLRESULTERROR: the CS could not process the CSMS's CALLRESULT
//    (e.g. the response to step 1). Same codes as a CALLERROR.
// --------------------------------------------
echo "--- 3. CALLRESULTERROR (messageTypeId 5) ---\n";

$rawError = [5, $open->uniqueId, 'FormatViolation', 'Could not process the response', []];

$error = $registry->createFromArray($rawError, 'v2.1');
JsonSchemaValidator::validate($error, 'v2.1');

echo "Received " . get_class($error) . " (" . $error->errorCode . ")\n";
echo "Is CALLRESULTERROR: " . ($error->isCallResultError() ? 'yes' : 'no') . "\n";
echo "Type id: " . MessageTypeId::from($error->toArray()[0])->name . "\n";
