<?php

declare(strict_types=1);

require_once __DIR__ . '/Support/JsonSchemaExampleFactory.php';

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use SolutionForest\OcppPhp\Ocpp\Datatype;
use SolutionForest\OcppPhp\Ocpp\JsonSchemaRegistry;
use SolutionForest\OcppPhp\Ocpp\JsonSchemaValidator;
use SolutionForest\OcppPhp\Ocpp\Messages\Message;

/**
 * Nested JSON objects are hydrated into the generated Datatype classes at every depth,
 * and serialize back to exactly the JSON that came in.
 */
final class TypedDatatypesTest extends TestCase
{
    public function test_v16_nested_objects_are_typed_at_every_depth(): void
    {
        $result = self::receiveResult('v1.6', 'GetCompositeSchedule', [
            'status' => 'Accepted',
            'connectorId' => 1,
            'chargingSchedule' => [
                'chargingRateUnit' => 'A',
                'chargingSchedulePeriod' => [['startPeriod' => 0, 'limit' => 16.5]],
            ],
        ]);

        self::assertInstanceOf(\SolutionForest\OcppPhp\Ocpp\v16\Datatypes\ChargingSchedule::class, $result->chargingSchedule);
        self::assertInstanceOf(\SolutionForest\OcppPhp\Ocpp\v16\Datatypes\ChargingSchedulePeriod::class, $result->chargingSchedule->chargingSchedulePeriod[0]);
        self::assertSame(16.5, $result->chargingSchedule->chargingSchedulePeriod[0]->limit);
        self::assertNull($result->chargingSchedule->duration);
    }

    public function test_v16_id_tag_info_is_typed(): void
    {
        $result = self::receiveResult('v1.6', 'Authorize', ['idTagInfo' => ['status' => 'Accepted']]);

        self::assertInstanceOf(\SolutionForest\OcppPhp\Ocpp\v16\Datatypes\IdTagInfo::class, $result->idTagInfo);
        self::assertSame('Accepted', $result->idTagInfo->status);
        self::assertStringContainsString(
            'AuthorizationStatus',
            (string) (new \ReflectionProperty($result->idTagInfo, 'status'))->getType(),
        );
    }

    public function test_v201_nested_objects_use_the_generated_datatypes(): void
    {
        $result = self::receiveResult('v2.0.1', 'GetCompositeSchedule', [
            'status' => 'Accepted',
            'schedule' => [
                'evseId' => 1,
                'duration' => 60,
                'scheduleStart' => '2026-01-01T00:00:00Z',
                'chargingRateUnit' => 'A',
                'chargingSchedulePeriod' => [['startPeriod' => 0, 'limit' => 16.5]],
            ],
        ]);

        self::assertInstanceOf(\SolutionForest\OcppPhp\Ocpp\v201\Datatypes\CompositeScheduleType::class, $result->schedule);
        self::assertInstanceOf(\SolutionForest\OcppPhp\Ocpp\v201\Datatypes\ChargingSchedulePeriodType::class, $result->schedule->chargingSchedulePeriod[0]);
    }

    public function test_messages_can_be_built_from_datatype_objects(): void
    {
        $call = new \SolutionForest\OcppPhp\Ocpp\v21\Calls\BootNotification([
            'reason' => 'PowerUp',
            'chargingStation' => new \SolutionForest\OcppPhp\Ocpp\v21\Datatypes\ChargingStationType([
                'model' => 'M1',
                'vendorName' => 'Acme',
            ]),
        ]);

        self::assertSame(
            '{"chargingStation":{"model":"M1","vendorName":"Acme"},"reason":"PowerUp"}',
            json_encode($call->getPayload()),
        );
        self::assertTrue(JsonSchemaValidator::validate($call, 'v2.1'));
    }

    public function test_only_free_form_objects_stay_untyped(): void
    {
        $untyped = [];

        foreach (['v16', 'v201', 'v21'] as $version) {
            foreach (['Calls', 'CallResults', 'Datatypes'] as $kind) {
                foreach (glob(dirname(__DIR__) . "/src/Ocpp/{$version}/{$kind}/*.php") ?: [] as $file) {
                    $class = "SolutionForest\\OcppPhp\\Ocpp\\{$version}\\{$kind}\\" . basename($file, '.php');
                    foreach ((new \ReflectionClass($class))->getProperties() as $property) {
                        $type = ltrim((string) $property->getType(), '?');
                        if ($type === 'object' && $property->getName() !== 'customData') {
                            $untyped[] = "{$class}::\${$property->getName()}";
                        }
                    }
                }
            }
        }

        self::assertSame([], $untyped, 'Object properties should be typed with a Datatype class');
    }

    /**
     * @return iterable<string, array{string, string, string, int}>
     */
    public static function provideMessageSchemas(): iterable
    {
        foreach (['v16' => 'v1.6', 'v201' => 'v2.0.1', 'v21' => 'v2.1'] as $dir => $version) {
            foreach (glob(dirname(__DIR__) . "/src/Ocpp/{$dir}/Schemas/*.json") ?: [] as $schemaFile) {
                $name = basename($schemaFile, '.json');
                $isResponse = str_ends_with($name, 'Response');
                $action = preg_replace('/(Request|Response)$/', '', $name);
                $type = $isResponse ? 3 : (($dir !== 'v16' && $action === $name) ? 6 : 2);

                yield "{$dir}/{$name}" => [$schemaFile, $version, $action, $type];
            }
        }
    }

    #[DataProvider('provideMessageSchemas')]
    public function test_every_message_round_trips_through_its_classes(string $schemaFile, string $version, string $action, int $type): void
    {
        $schema = json_decode((string) file_get_contents($schemaFile), true);
        $payload = JsonSchemaExampleFactory::createPayload($schema);
        $registry = new JsonSchemaRegistry();

        $message = $type === 3
            ? $registry->createFromArray([3, 'id', $payload], $version, $action)
            : $registry->createFromArray([$type, 'id', $action, $payload], $version);

        self::assertInstanceOf(Message::class, $message);
        self::assertTrue(JsonSchemaValidator::validate($message, $version));
        self::assertEquals(
            json_decode((string) json_encode($payload), true),
            json_decode((string) json_encode($message->getPayload()), true),
        );
    }

    public function test_datatypes_extend_the_shared_base(): void
    {
        self::assertTrue(is_subclass_of(\SolutionForest\OcppPhp\Ocpp\v201\Datatypes\IdTokenType::class, Datatype::class));
        self::assertTrue(is_subclass_of(\SolutionForest\OcppPhp\Ocpp\v16\Datatypes\SampledValue::class, Datatype::class));
    }

    private static function receiveResult(string $version, string $action, array $payload): object
    {
        $json = json_encode([3, 'id', $payload]);

        return (new JsonSchemaRegistry())->createFromArray(json_decode((string) $json, true), $version, $action);
    }
}
