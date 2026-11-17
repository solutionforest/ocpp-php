<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use SolutionForest\OcppPhp\Ocpp\Exceptions\InternalError;
use SolutionForest\OcppPhp\Ocpp\JsonSchemaRegistry;
use SolutionForest\OcppPhp\Ocpp\JsonSchemaValidator;
use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\Messages\CallError;
use SolutionForest\OcppPhp\Ocpp\Messages\Send;
use SolutionForest\OcppPhp\Ocpp\v21\CallResults\BootNotification as BootNotificationResult;
use SolutionForest\OcppPhp\Ocpp\v21\Calls\BootNotification;
use SolutionForest\OcppPhp\Ocpp\v21\Calls\CostUpdated;
use SolutionForest\OcppPhp\Ocpp\v21\Calls\NotifyPeriodicEventStream;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\BootReason;

final class V21MessagesTest extends TestCase
{
    /**
     * Guards against generated classes that fail to load, e.g. a class importing
     * an enum with the same short name ("Cannot declare class ... already in use").
     *
     * @return iterable<string, array{string}>
     */
    public static function provideGeneratedClasses(): iterable
    {
        $root = dirname(__DIR__) . '/src/Ocpp';

        foreach (['v16', 'v201', 'v21'] as $version) {
            foreach (['Calls', 'CallResults', 'Datatypes', 'Enums'] as $kind) {
                foreach (glob("{$root}/{$version}/{$kind}/*.php") ?: [] as $file) {
                    $class = "SolutionForest\\OcppPhp\\Ocpp\\{$version}\\{$kind}\\" . basename($file, '.php');
                    yield "{$version}/{$kind}/" . basename($file, '.php') => [$class];
                }
            }
        }
    }

    #[DataProvider('provideGeneratedClasses')]
    public function test_generated_class_loads(string $class): void
    {
        self::assertTrue(class_exists($class) || enum_exists($class), "{$class} could not be loaded");
    }

    public function test_latest_version_is_v21(): void
    {
        self::assertSame('v2.1', (new JsonSchemaRegistry())->findLatestVersion());
    }

    public function test_boot_notification_round_trip(): void
    {
        $raw = [2, 'boot-1', 'BootNotification', [
            'reason' => 'PowerUp',
            'chargingStation' => ['model' => 'M1', 'vendorName' => 'Vendor'],
        ]];

        $call = (new JsonSchemaRegistry())->createFromArray($raw, 'v2.1');

        self::assertInstanceOf(BootNotification::class, $call);
        self::assertSame('boot-1', $call->uniqueId);
        self::assertTrue(JsonSchemaValidator::validate($call, 'v2.1'));
        self::assertSame(2, $call->toArray()[0]);
        self::assertSame('BootNotification', $call->toArray()[2]);

        $result = new BootNotificationResult('boot-1', [
            'currentTime' => '2026-11-16T10:00:00Z',
            'interval' => 300,
            'status' => 'Accepted',
        ]);

        self::assertTrue(JsonSchemaValidator::validate($result, 'v2.1'));
    }

    public function test_enum_values_can_be_used_for_enum_properties(): void
    {
        $call = new BootNotification(['chargingStation' => ['model' => 'M1', 'vendorName' => 'Vendor']]);
        $call->reason = BootReason::PowerUp;

        self::assertSame(BootReason::PowerUp, $call->reason);
        self::assertTrue(JsonSchemaValidator::validate($call, 'v2.1'));
        self::assertStringContainsString('"reason":"PowerUp"', json_encode($call->toArray()));
    }

    public function test_object_validation_handles_nested_arrays_of_objects_in_v201(): void
    {
        $call = new \SolutionForest\OcppPhp\Ocpp\v201\Calls\MeterValues([
            'evseId' => 1,
            'meterValue' => [['timestamp' => '2026-01-01T00:00:00Z', 'sampledValue' => [['value' => 1]]]],
        ]);

        self::assertTrue(JsonSchemaValidator::validate($call, 'v2.0.1'));
    }

    public function test_decimal_number_fields_are_not_truncated(): void
    {
        $call = new CostUpdated(['totalCost' => 12.75, 'transactionId' => 'tx-1']);

        self::assertSame(12.75, $call->totalCost);
        self::assertTrue(JsonSchemaValidator::validate($call, 'v2.1'));
    }

    public function test_send_message_is_parsed_and_serialized_with_type_6(): void
    {
        $raw = [6, 'send-1', 'NotifyPeriodicEventStream', [
            'id' => 1,
            'pending' => 0,
            'basetime' => '2026-11-16T10:00:00Z',
            'data' => [['t' => 0.5, 'v' => '230.1']],
        ]];

        $message = (new JsonSchemaRegistry())->createFromArray($raw, 'v2.1');

        self::assertInstanceOf(NotifyPeriodicEventStream::class, $message);
        self::assertInstanceOf(Send::class, $message);
        self::assertInstanceOf(Call::class, $message);
        self::assertSame(6, $message->toArray()[0]);
        self::assertTrue(JsonSchemaValidator::validate($message, 'v2.1'));
    }

    public function test_send_schema_resolves_for_raw_array_validation(): void
    {
        $message = [
            'messageTypeID' => 6,
            'uniqueId' => 'send-2',
            'action' => 'NotifyPeriodicEventStream',
            'payload' => ['id' => 1, 'pending' => 0, 'basetime' => '2026-11-16T10:00:00Z', 'data' => [['t' => 1, 'v' => 'x']]],
        ];

        self::assertTrue(JsonSchemaValidator::validate($message, 'v2.1'));
    }

    public function test_send_message_type_rejected_for_regular_call_action(): void
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('cannot be sent as a SEND message');

        (new JsonSchemaRegistry())->createFromArray([6, 'x', 'BootNotification', []], 'v2.1');
    }

    public function test_call_result_error_is_parsed_and_round_trips(): void
    {
        $raw = [5, 'cre-1', 'InternalError', 'Could not process result', ['reason' => 'db']];

        $error = (new JsonSchemaRegistry())->createFromArray($raw, 'v2.1');

        self::assertInstanceOf(CallError::class, $error);
        self::assertInstanceOf(InternalError::class, $error);
        self::assertTrue($error->isCallResultError());
        self::assertSame(5, $error->toArray()[0]);
        self::assertTrue(JsonSchemaValidator::validate($error, 'v2.1'));
        self::assertTrue(JsonSchemaValidator::validate($raw, 'v2.1'));
    }

    public function test_call_error_is_not_flagged_as_call_result_error(): void
    {
        $error = CallError::fromArray([4, 'ce-1', 'InternalError', '', []]);

        self::assertFalse($error->isCallResultError());
        self::assertSame(4, $error->toArray()[0]);
    }
}
