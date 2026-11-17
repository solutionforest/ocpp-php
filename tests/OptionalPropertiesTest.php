<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use SolutionForest\OcppPhp\Ocpp\JsonSchemaValidator;
use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;
use SolutionForest\OcppPhp\Ocpp\Messages\Message;

/**
 * Optional (non-required) properties of generated Calls and CallResults default to null,
 * and null values never end up in the serialized payload (no OCPP schema allows null).
 */
final class OptionalPropertiesTest extends TestCase
{
    /**
     * @return iterable<string, array{Message, string, list<string>}>
     */
    public static function provideMessagesWithAbsentOptionals(): iterable
    {
        yield 'v1.6 GetConfiguration result' => [
            new \SolutionForest\OcppPhp\Ocpp\v16\CallResults\GetConfiguration('id-1', []),
            'v1.6',
            ['configurationKey', 'unknownKey'],
        ];

        yield 'v1.6 DataTransfer call' => [
            new \SolutionForest\OcppPhp\Ocpp\v16\Calls\DataTransfer(['vendorId' => 'Acme']),
            'v1.6',
            ['messageId', 'data'],
        ];

        yield 'v2.0.1 Authorize result' => [
            new \SolutionForest\OcppPhp\Ocpp\v201\CallResults\Authorize('id-2', ['idTokenInfo' => ['status' => 'Accepted']]),
            'v2.0.1',
            ['customData', 'certificateStatus'],
        ];

        yield 'v2.0.1 Heartbeat call' => [
            new \SolutionForest\OcppPhp\Ocpp\v201\Calls\Heartbeat(),
            'v2.0.1',
            ['customData'],
        ];

        yield 'v2.1 Authorize result' => [
            new \SolutionForest\OcppPhp\Ocpp\v21\CallResults\Authorize('id-3', ['idTokenInfo' => ['status' => 'Accepted']]),
            'v2.1',
            ['certificateStatus', 'allowedEnergyTransfer', 'tariff', 'customData'],
        ];

        yield 'v2.1 DataTransfer call' => [
            new \SolutionForest\OcppPhp\Ocpp\v21\Calls\DataTransfer(['vendorId' => 'Acme']),
            'v2.1',
            ['messageId', 'data', 'customData'],
        ];
    }

    /**
     * @param list<string> $optionals
     */
    #[DataProvider('provideMessagesWithAbsentOptionals')]
    public function test_absent_optional_properties_read_as_null(Message $message, string $version, array $optionals): void
    {
        foreach ($optionals as $property) {
            self::assertNull($message->{$property}, "{$property} should default to null");
        }
    }

    /**
     * @param list<string> $optionals
     */
    #[DataProvider('provideMessagesWithAbsentOptionals')]
    public function test_absent_optional_properties_are_omitted_from_payload(Message $message, string $version, array $optionals): void
    {
        $payload = (array) $message->getPayload();

        foreach ($optionals as $property) {
            self::assertArrayNotHasKey($property, $payload, "{$property} should not be serialized");
        }

        self::assertTrue(JsonSchemaValidator::validate($message, $version));
    }

    public function test_optional_property_explicitly_set_to_null_is_omitted(): void
    {
        $call = new \SolutionForest\OcppPhp\Ocpp\v201\Calls\BootNotification([
            'reason' => 'PowerUp',
            'chargingStation' => ['model' => 'M1', 'vendorName' => 'Acme'],
        ]);
        $call->customData = null;

        self::assertSame(
            '[2,"' . $call->uniqueId . '","BootNotification",{"chargingStation":{"model":"M1","vendorName":"Acme"},"reason":"PowerUp"}]',
            json_encode($call->toArray()),
        );
        self::assertTrue(JsonSchemaValidator::validate($call, 'v2.0.1'));
    }

    public function test_set_optional_values_are_still_serialized(): void
    {
        $result = new \SolutionForest\OcppPhp\Ocpp\v201\CallResults\Authorize('id-4', [
            'idTokenInfo' => ['status' => 'Accepted'],
            'certificateStatus' => 'Accepted',
        ]);

        $payload = (array) $result->getPayload();

        self::assertSame('Accepted', $payload['certificateStatus']);
        self::assertInstanceOf(CallResult::class, $result);
        self::assertTrue(JsonSchemaValidator::validate($result, 'v2.0.1'));
    }

    public function test_required_properties_have_no_default(): void
    {
        $property = new \ReflectionProperty(\SolutionForest\OcppPhp\Ocpp\v201\Calls\BootNotification::class, 'reason');

        self::assertFalse($property->hasDefaultValue(), 'required properties must stay uninitialized until set');
        self::assertTrue(is_subclass_of(\SolutionForest\OcppPhp\Ocpp\v201\Calls\BootNotification::class, Call::class));
    }
}
