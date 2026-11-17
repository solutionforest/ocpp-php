<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use SolutionForest\OcppPhp\Scripts\SchemaProcessor;

/**
 * Enums declared inline in schemas (core OCPP 1.6) are generated under their OCPP spec name
 * (SchemaProcessor::INLINE_ENUMS) and contain every value the schemas list for them.
 */
final class InlineEnumsTest extends TestCase
{
    /**
     * @return iterable<string, array{string, ?string, list<string>}>
     */
    public static function provideInlineEnums(): iterable
    {
        foreach (SchemaProcessor::SUPPORTED_VERSIONS as $version) {
            foreach (glob(dirname(__DIR__) . "/src/Ocpp/{$version}/Schemas/*.json") ?: [] as $schemaFile) {
                $schemaName = basename($schemaFile, '.json');
                $schema = json_decode((string) file_get_contents($schemaFile), true);

                foreach (SchemaProcessor::findInlineEnums($version, $schemaName, $schema) as $inline) {
                    yield "{$version} {$schemaName}:{$inline['path']}" => [$version, $inline['enum'], $inline['values']];
                }
            }
        }
    }

    /**
     * @param list<string> $expected
     */
    #[DataProvider('provideInlineEnums')]
    public function test_inline_enum_is_named_and_contains_schema_values(string $version, ?string $enum, array $expected): void
    {
        self::assertNotNull($enum, 'Inline enum has no name in SchemaProcessor::INLINE_ENUMS');

        $class = "SolutionForest\\OcppPhp\\Ocpp\\{$version}\\Enums\\{$enum}";
        self::assertTrue(enum_exists($class), "{$class} was not generated");

        $values = array_map(static fn (\BackedEnum $case): string => $case->value, $class::cases());
        foreach ($expected as $value) {
            self::assertContains($value, $values);
        }
    }

    public function test_all_ocpp16_spec_enumerations_exist(): void
    {
        // OCPP 1.6 edition 2, chapter 7 "Types": every Enumeration.
        $specEnums = [
            'AuthorizationStatus', 'AvailabilityStatus', 'AvailabilityType', 'CancelReservationStatus',
            'ChargePointErrorCode', 'ChargePointStatus', 'ChargingProfileKindType', 'ChargingProfilePurposeType',
            'ChargingProfileStatus', 'ChargingRateUnitType', 'ClearCacheStatus', 'ClearChargingProfileStatus',
            'ConfigurationStatus', 'DataTransferStatus', 'DiagnosticsStatus', 'FirmwareStatus',
            'GetCompositeScheduleStatus', 'Location', 'Measurand', 'MessageTrigger', 'Phase', 'ReadingContext',
            'Reason', 'RecurrencyKindType', 'RegistrationStatus', 'RemoteStartStopStatus', 'ReservationStatus',
            'ResetStatus', 'ResetType', 'TriggerMessageStatus', 'UnitOfMeasure', 'UnlockStatus', 'UpdateStatus',
            'UpdateType', 'ValueFormat',
        ];

        foreach ($specEnums as $enum) {
            self::assertTrue(enum_exists("SolutionForest\\OcppPhp\\Ocpp\\v16\\Enums\\{$enum}"), "Missing v1.6 enum {$enum}");
        }
    }

    public function test_top_level_inline_enum_properties_are_typed_with_the_enum(): void
    {
        $status = (string) (new \ReflectionProperty(\SolutionForest\OcppPhp\Ocpp\v16\Calls\StatusNotification::class, 'status'))->getType();
        $errorCode = (string) (new \ReflectionProperty(\SolutionForest\OcppPhp\Ocpp\v16\Calls\StatusNotification::class, 'errorCode'))->getType();
        $reason = (string) (new \ReflectionProperty(\SolutionForest\OcppPhp\Ocpp\v16\Calls\StopTransaction::class, 'reason'))->getType();

        self::assertStringContainsString('ChargePointStatus', $status);
        self::assertStringContainsString('ChargePointErrorCode', $errorCode);
        self::assertStringContainsString('Reason', $reason);
    }

    public function test_enum_values_are_serialized_and_validated(): void
    {
        $call = new \SolutionForest\OcppPhp\Ocpp\v16\Calls\StatusNotification([
            'connectorId' => 1,
            'errorCode' => 'NoError',
        ]);
        $call->status = \SolutionForest\OcppPhp\Ocpp\v16\Enums\ChargePointStatus::Charging;

        self::assertStringContainsString('"status":"Charging"', (string) json_encode($call->toArray()));
        self::assertTrue(\SolutionForest\OcppPhp\Ocpp\JsonSchemaValidator::validate($call, 'v1.6'));
    }
}
