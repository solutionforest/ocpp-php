<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use SolutionForest\OcppPhp\Ocpp\JsonSchemaRegistry;
use SolutionForest\OcppPhp\Ocpp\JsonSchemaValidator;
use SolutionForest\OcppPhp\Ocpp\Messages\CallError;
use SolutionForest\OcppPhp\Ocpp\Exceptions\NotImplementedError;
use SolutionForest\OcppPhp\Ocpp\Exceptions\NotSupportedError;
use SolutionForest\OcppPhp\Ocpp\Exceptions\InternalError;
use SolutionForest\OcppPhp\Ocpp\Exceptions\ProtocolError;
use SolutionForest\OcppPhp\Ocpp\Exceptions\SecurityError;
use SolutionForest\OcppPhp\Ocpp\Exceptions\FormatViolationError;
use SolutionForest\OcppPhp\Ocpp\Exceptions\FormationViolationError;
use SolutionForest\OcppPhp\Ocpp\Exceptions\GenericError;
use SolutionForest\OcppPhp\Ocpp\Exceptions\TypeConstraintViolationError;
use SolutionForest\OcppPhp\Ocpp\Exceptions\OccurrenceConstraintViolationError;
use SolutionForest\OcppPhp\Ocpp\Exceptions\OccurenceConstraintViolationError;
use SolutionForest\OcppPhp\Ocpp\Exceptions\PropertyConstraintViolationError;
use SolutionForest\OcppPhp\Ocpp\Exceptions\UnknownCallErrorCodeError;

final class CallErrorTest extends TestCase
{
    /**
     * Exact payload from a real MicroOcpp charger that doesn't implement ExtendedTriggerMessage.
     * [4, "6961263434", "NotImplemented", "", []]
     */
    public function test_from_array_parses_not_implemented_error(): void
    {
        $message = [4, '6961263434', 'NotImplemented', '', []];

        $callError = CallError::fromArray($message);

        $this->assertInstanceOf(NotImplementedError::class, $callError);
        $this->assertSame('6961263434', $callError->uniqueId);
        $this->assertSame(4, $callError->messageTypeID);
        $this->assertSame('NotImplemented', $callError->errorCode);
        $this->assertSame('', $callError->errorDescription);
        $this->assertSame([], $callError->errorDetails);
    }

    public function test_from_array_parses_not_implemented_with_default_description(): void
    {
        // When constructed via constructor, the default description is set by the class
        $error = new NotImplementedError('test-id');
        $this->assertSame('Request Action is recognized but not supported by the receiver', $error->errorDescription);
    }

    public function test_from_array_parses_not_supported_error(): void
    {
        $message = [4, 'test-id', 'NotSupported', 'Unknown action', []];

        $callError = CallError::fromArray($message);

        $this->assertInstanceOf(NotSupportedError::class, $callError);
        $this->assertSame('NotSupported', $callError->errorCode);
        $this->assertSame('Unknown action', $callError->errorDescription);
    }

    public function test_from_array_parses_internal_error(): void
    {
        $message = [4, 'test-id', 'InternalError', 'Something went wrong', []];

        $callError = CallError::fromArray($message);

        $this->assertInstanceOf(InternalError::class, $callError);
        $this->assertSame('InternalError', $callError->errorCode);
        $this->assertSame('Something went wrong', $callError->errorDescription);
    }

    public function test_from_array_parses_protocol_error(): void
    {
        $message = [4, 'test-id', 'ProtocolError', 'Incomplete payload', []];

        $callError = CallError::fromArray($message);

        $this->assertInstanceOf(ProtocolError::class, $callError);
        $this->assertSame('ProtocolError', $callError->errorCode);
    }

    public function test_from_array_parses_security_error(): void
    {
        $message = [4, 'test-id', 'SecurityError', 'Security issue', []];

        $callError = CallError::fromArray($message);

        $this->assertInstanceOf(SecurityError::class, $callError);
        $this->assertSame('SecurityError', $callError->errorCode);
    }

    public function test_from_array_parses_format_violation_error(): void
    {
        $message = [4, 'test-id', 'FormatViolation', 'Bad payload', []];

        $callError = CallError::fromArray($message);

        $this->assertInstanceOf(FormatViolationError::class, $callError);
        $this->assertSame('FormatViolation', $callError->errorCode);
    }

    public function test_from_array_parses_formation_violation_error(): void
    {
        $message = [4, 'test-id', 'FormationViolation', 'Bad payload (OCPP 1.6 errata)', []];

        $callError = CallError::fromArray($message);

        $this->assertInstanceOf(FormationViolationError::class, $callError);
        $this->assertSame('FormationViolation', $callError->errorCode);
    }

    public function test_from_array_parses_generic_error(): void
    {
        $message = [4, 'test-id', 'GenericError', 'Something happened', []];

        $callError = CallError::fromArray($message);

        $this->assertInstanceOf(GenericError::class, $callError);
        $this->assertSame('GenericError', $callError->errorCode);
    }

    public function test_from_array_parses_type_constraint_violation_error(): void
    {
        $message = [4, 'test-id', 'TypeConstraintViolation', 'Data type mismatch', []];

        $callError = CallError::fromArray($message);

        $this->assertInstanceOf(TypeConstraintViolationError::class, $callError);
        $this->assertSame('TypeConstraintViolation', $callError->errorCode);
    }

    public function test_from_array_parses_occurrence_constraint_violation_error(): void
    {
        $message = [4, 'test-id', 'OccurrenceConstraintViolation', 'Occurrence constraint violated', []];

        $callError = CallError::fromArray($message);

        $this->assertInstanceOf(OccurrenceConstraintViolationError::class, $callError);
        $this->assertSame('OccurrenceConstraintViolation', $callError->errorCode);
    }

    public function test_from_array_parses_occurence_constraint_violation_error(): void
    {
        $message = [4, 'test-id', 'OccurenceConstraintViolation', 'Occurence constraint violated', []];

        $callError = CallError::fromArray($message);

        $this->assertInstanceOf(OccurenceConstraintViolationError::class, $callError);
        $this->assertSame('OccurenceConstraintViolation', $callError->errorCode);
    }

    public function test_from_array_parses_property_constraint_violation_error(): void
    {
        $message = [4, 'test-id', 'PropertyConstraintViolation', 'Property constraint violated', []];

        $callError = CallError::fromArray($message);

        $this->assertInstanceOf(PropertyConstraintViolationError::class, $callError);
        $this->assertSame('PropertyConstraintViolation', $callError->errorCode);
    }

    public function test_from_array_parses_unknown_error_code(): void
    {
        // For error codes not in the spec, returns UnknownCallErrorCodeError
        $message = [4, 'test-id', 'SomeCustomError', 'Custom error description', ['detail' => 'extra']];

        $callError = CallError::fromArray($message);

        $this->assertInstanceOf(UnknownCallErrorCodeError::class, $callError);
        $this->assertSame('SomeCustomError', $callError->errorCode);
        $this->assertSame('Custom error description', $callError->errorDescription);
        $this->assertSame(['detail' => 'extra'], $callError->errorDetails);
    }

    public function test_from_array_with_error_details(): void
    {
        $message = [4, 'test-id', 'NotImplemented', '', ['reason' => 'Not supported by this charger']];

        $callError = CallError::fromArray($message);

        $this->assertInstanceOf(NotImplementedError::class, $callError);
        $this->assertSame(['reason' => 'Not supported by this charger'], $callError->errorDetails);
    }

    public function test_from_array_throws_on_invalid_message_type(): void
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Invalid message type for CallError, expected 4 got 3');

        CallError::fromArray([3, 'test-id', ['status' => 'Accepted']]);
    }

    public function test_to_array_roundtrip_for_not_implemented(): void
    {
        $original = [4, '6961263434', 'NotImplemented', '', []];

        $callError = CallError::fromArray($original);
        $array = $callError->toArray();

        $this->assertSame(4, $array[0]);
        $this->assertSame('6961263434', $array[1]);
        $this->assertSame('NotImplemented', $array[2]);
        $this->assertSame('', $array[3]);
        // errorDetails is cast to (object) in toArray() for JSON encoding compatibility
        $this->assertInstanceOf(\stdClass::class, $array[4]);
    }

    public function test_to_array_roundtrip_with_details(): void
    {
        $original = [4, 'test-id', 'GenericError', 'Error occurred', ['detail' => 'extra']];

        $callError = CallError::fromArray($original);
        $array = $callError->toArray();

        $this->assertSame(4, $array[0]);
        $this->assertSame('test-id', $array[1]);
        $this->assertSame('GenericError', $array[2]);
        $this->assertSame('Error occurred', $array[3]);
        $this->assertEquals((object) ['detail' => 'extra'], $array[4]);
    }

    public function test_validator_skips_call_error_objects(): void
    {
        $error = new NotImplementedError('test-id');

        $result = JsonSchemaValidator::validate($error, 'v1.6');

        $this->assertTrue($result);
    }

    public function test_validator_skips_call_error_arrays(): void
    {
        $rawCallError = [
            'messageTypeID' => 4,
            'uniqueId' => 'test-id',
            'action' => 'NotImplemented',
            'payload' => [],
        ];

        $result = JsonSchemaValidator::validate($rawCallError, 'v1.6');

        $this->assertTrue($result);
    }

    public function test_validator_skips_call_error_array_with_numeric_keys(): void
    {
        $rawCallError = [4, 'test-id', 'NotImplemented', '', []];

        $result = JsonSchemaValidator::validate($rawCallError, 'v1.6');

        $this->assertTrue($result);
    }

    public function test_registry_create_from_array_handles_call_error(): void
    {
        $registry = new JsonSchemaRegistry();
        $message = [4, '6961263434', 'NotImplemented', '', []];

        $result = $registry->createFromArray($message, 'v1.6');

        $this->assertInstanceOf(NotImplementedError::class, $result);
        $this->assertSame('NotImplemented', $result->errorCode);
    }

    public function test_property_constraint_violation_error_has_correct_error_code(): void
    {
        $error = new PropertyConstraintViolationError('test-id');

        $this->assertSame('PropertyConstraintViolation', $error->errorCode);
        $this->assertSame('Payload for Action is syntactically correct but at least one of the fields violates property constraints', $error->errorDescription);
    }
}
