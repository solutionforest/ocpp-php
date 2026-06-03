<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use SolutionForest\OcppPhp\Ocpp\v16\CallResults\GetCompositeSchedule;
use SolutionForest\OcppPhp\Ocpp\v16\CallResults\StartTransaction;
use SolutionForest\OcppPhp\Ocpp\v16\CallResults\StopTransaction;
use SolutionForest\OcppPhp\Ocpp\v16\CallResults\Authorize;
use SolutionForest\OcppPhp\Ocpp\v201\CallResults\BootNotification as BootNotificationResult;
use SolutionForest\OcppPhp\Ocpp\v201\Calls\BootNotification as BootNotificationCall;

final class CallResultObjectCoercionTest extends TestCase
{
    /**
     * Exact payload from the GitHub issue: a real station sending GetCompositeSchedule response.
     */
    public function test_get_composite_schedule_with_real_station_payload(): void
    {
        $payload = [
            'status' => 'Accepted',
            'connectorId' => 1,
            'scheduleStart' => '2026-05-23T09:35:35Z',
            'chargingSchedule' => [
                'duration' => 7200,
                'startSchedule' => '2026-05-23T09:35:35Z',
                'chargingRateUnit' => 'A',
                'chargingSchedulePeriod' => [
                    [
                        'startPeriod' => 0,
                        'limit' => -1,
                        'numberPhases' => -1,
                    ],
                ],
            ],
        ];

        $result = new GetCompositeSchedule('test-id', $payload);

        $this->assertSame('Accepted', $result->status);
        $this->assertSame(1, $result->connectorId);
        $this->assertSame('2026-05-23T09:35:35Z', $result->scheduleStart);

        // The key assertion: chargingSchedule should be an object, not an array
        $this->assertIsObject($result->chargingSchedule);
        $this->assertInstanceOf(\stdClass::class, $result->chargingSchedule);

        // Nested properties should be accessible as object properties
        $this->assertSame(7200, $result->chargingSchedule->duration);
        $this->assertSame('A', $result->chargingSchedule->chargingRateUnit);

        // Nested arrays (like chargingSchedulePeriod) should remain arrays
        $this->assertIsArray($result->chargingSchedule->chargingSchedulePeriod);
        $this->assertCount(1, $result->chargingSchedule->chargingSchedulePeriod);
        $this->assertSame(0, $result->chargingSchedule->chargingSchedulePeriod[0]['startPeriod']);
        $this->assertSame(-1, $result->chargingSchedule->chargingSchedulePeriod[0]['limit']);
    }

    public function test_start_transaction_object_coercion(): void
    {
        $payload = [
            'idTagInfo' => [
                'status' => 'Accepted',
                'expiryDate' => '2026-05-24T00:00:00Z',
                'parentIdTag' => '12345',
            ],
            'transactionId' => 42,
        ];

        $result = new StartTransaction('test-id', $payload);

        $this->assertIsObject($result->idTagInfo);
        $this->assertSame('Accepted', $result->idTagInfo->status);
        $this->assertSame(42, $result->transactionId);
    }

    public function test_stop_transaction_nullable_object(): void
    {
        // With idTagInfo present
        $result = new StopTransaction('test-id', [
            'idTagInfo' => [
                'status' => 'Accepted',
            ],
        ]);

        $this->assertIsObject($result->idTagInfo);
        $this->assertSame('Accepted', $result->idTagInfo->status);
    }

    public function test_authorize_object_coercion(): void
    {
        $payload = [
            'idTagInfo' => [
                'status' => 'Accepted',
            ],
        ];

        $result = new Authorize('test-id', $payload);

        $this->assertIsObject($result->idTagInfo);
        $this->assertSame('Accepted', $result->idTagInfo->status);
    }

    public function test_null_is_preserved_for_nullable_object_properties(): void
    {
        $result = new GetCompositeSchedule('test-id', [
            'status' => 'Accepted',
            'connectorId' => null,
            'scheduleStart' => null,
            'chargingSchedule' => null,
        ]);

        $this->assertNull($result->chargingSchedule);
        $this->assertNull($result->connectorId);
        $this->assertNull($result->scheduleStart);
    }

    public function test_scalar_properties_are_unaffected(): void
    {
        $payload = [
            'status' => 'Rejected',
            'connectorId' => 2,
            'scheduleStart' => '2026-06-01T00:00:00Z',
            'chargingSchedule' => [
                'duration' => 3600,
                'startSchedule' => '2026-06-01T00:00:00Z',
                'chargingRateUnit' => 'W',
                'chargingSchedulePeriod' => [],
            ],
        ];

        $result = new GetCompositeSchedule('test-id', $payload);

        // Scalar properties unchanged
        $this->assertIsString($result->status);
        $this->assertIsInt($result->connectorId);
        $this->assertIsString($result->scheduleStart);
    }

    public function test_from_array_roundtrip_with_object_properties(): void
    {
        $message = [
            3,
            '4202995311',
            [
                'status' => 'Accepted',
                'connectorId' => 1,
                'scheduleStart' => '2026-05-23T09:35:35Z',
                'chargingSchedule' => [
                    'duration' => 7200,
                    'startSchedule' => '2026-05-23T09:35:35Z',
                    'chargingRateUnit' => 'A',
                    'chargingSchedulePeriod' => [
                        [
                            'startPeriod' => 0,
                            'limit' => -1,
                            'numberPhases' => -1,
                        ],
                    ],
                ],
            ],
        ];

        $result = GetCompositeSchedule::fromArray($message, 'GetCompositeSchedule', 'v1.6');

        $this->assertInstanceOf(GetCompositeSchedule::class, $result);
        $this->assertIsObject($result->chargingSchedule);
        $this->assertSame('Accepted', $result->chargingSchedule->duration === 7200 ? 'Accepted' : null);
        $this->assertSame(7200, $result->chargingSchedule->duration);

        // toArray should work without errors
        $array = $result->toArray();
        $this->assertIsArray($array);
        $this->assertSame(3, $array[0]);
        $this->assertSame('4202995311', $array[1]);
    }

    public function test_v201_boot_notification_call_object_coercion(): void
    {
        $payload = [
            'chargingStation' => [
                'model' => 'TestModel',
                'vendorName' => 'TestVendor',
            ],
            'reason' => 'PowerUp',
        ];

        $call = new BootNotificationCall($payload);

        $this->assertIsObject($call->chargingStation);
        $this->assertSame('TestModel', $call->chargingStation->model);
        $this->assertSame('TestVendor', $call->chargingStation->vendorName);
    }

    public function test_v201_boot_notification_result_object_coercion(): void
    {
        $payload = [
            'currentTime' => '2026-05-23T09:35:35Z',
            'interval' => 300,
            'status' => 'Accepted',
            'statusInfo' => [
                'reasonCode' => 'test-reason',
                'additionalInfo' => 'test-info',
            ],
        ];

        $result = new BootNotificationResult('test-id', $payload);

        $this->assertIsObject($result->statusInfo);
        $this->assertSame('test-reason', $result->statusInfo->reasonCode);
    }
}
