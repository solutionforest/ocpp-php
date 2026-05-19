<?php

namespace SolutionForest\OcppPhp\Ocpp;

use SolutionForest\OcppPhp\Ocpp\Exceptions\FormatViolationError;
use SolutionForest\OcppPhp\Ocpp\Exceptions\ProtocolError;
use SolutionForest\OcppPhp\Ocpp\Exceptions\TypeConstraintViolationError;
use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\Messages\CallError;
use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;

class JsonSchemaValidator
{
    public static function validate(Call|CallResult|array $message, string $version, bool $throwException = true): bool|CallError
    {
        $registry = new JsonSchemaRegistry();
        $schema = $registry->getSchema($message, $version);
        $payload = is_array($message) ? $message['payload'] : $message->getPayload();
        $payload = self::normalizePayload($payload, $schema);

        $validator = self::validatePayload($payload, $schema);

        if (!$validator->isValid()) {
            $uniqueId = self::extractUniqueId($message);

            foreach ($validator->getErrors() as $error) {
                $callError = self::createCallErrorFromValidationError($error, $uniqueId);

                if ($throwException) {
                    throw new \Exception(self::formatValidationExceptionMessage($callError));
                }

                return $callError;
            }
        }

        return $validator->isValid();
    }

    private static function validatePayload(mixed $payload, array $schema): \JsonSchema\Validator
    {
        if (self::containsUnsupportedSchemaId($schema)) {
            $schema = self::normalizeUnsupportedSchemaIds($schema);
        }

        $schemaId = self::getSchemaId($schema) ?? \JsonSchema\SchemaStorage::INTERNAL_PROVIDED_SCHEMA_URI;
        $schemaStorage = new \JsonSchema\SchemaStorage();
        $schemaStorage->addSchema($schemaId, $schema);

        $validator = new \JsonSchema\Validator(new \JsonSchema\Constraints\Factory($schemaStorage));
        $validator->validate($payload, $schemaStorage->getSchema($schemaId));

        return $validator;
    }

    private static function extractUniqueId(Call|CallResult|array $message): ?string
    {
        return is_array($message)
            ? ($message['uniqueId'] ?? $message['UniqueId'] ?? $message['messageId'] ?? $message[1] ?? null)
            : $message->getUniqueId();
    }

    private static function createCallErrorFromValidationError(array $error, ?string $uniqueId): CallError
    {
        $constraint = self::extractConstraintName($error);
        $errorDetails = self::formatValidationErrorDetails($error, $constraint);

        return match ($constraint) {
            'type', 'maxLength' => new TypeConstraintViolationError($uniqueId, null, null, [$errorDetails]),
            'additionalProperties' => new FormatViolationError($uniqueId, null, null, [$errorDetails]),
            'required' => new ProtocolError($uniqueId, null, null, [$errorDetails]),
            default => new FormatViolationError($uniqueId, null, null, [$errorDetails]),
        };
    }

    private static function extractConstraintName(array $error): ?string
    {
        $constraint = $error['constraint'] ?? null;

        if (is_string($constraint)) {
            return $constraint;
        }

        if (is_array($constraint) && is_string($constraint['name'] ?? null)) {
            return $constraint['name'];
        }

        return null;
    }

    private static function formatValidationErrorDetails(array $error, ?string $constraint): string
    {
        $message = is_string($error['message'] ?? null)
            ? $error['message']
            : 'Unknown schema validation error';

        if (in_array($constraint, ['type', 'additionalProperties', 'required', 'maxLength'], true)) {
            return $message;
        }

        $name = is_string($error['property'] ?? null) ? $error['property'] : null;

        if ($name === null || $name === '') {
            return $message;
        }

        return "Payload {$name} is not valid: " . $message;
    }

    private static function formatValidationExceptionMessage(CallError $callError): string
    {
        $detail = $callError->errorDetails[0] ?? $callError->errorDescription;

        return $callError->errorCode . ': ' . $detail;
    }

    private static function normalizePayload(mixed $payload, array $schema, ?array $rootSchema = null): mixed
    {
        if (!is_array($payload)) {
            return $payload;
        }

        $rootSchema ??= $schema;
        $schema = self::resolveSchema($schema, $rootSchema);

        if (self::detectSchemaType($schema) === 'array') {
            $items = $schema['items'] ?? [];
            $normalizedPayload = [];

            foreach ($payload as $key => $value) {
                $itemSchema = [];
                if (is_array($items) && array_is_list($items)) {
                    $itemSchema = is_array($items[$key] ?? null)
                        ? $items[$key]
                        : (is_array(end($items)) ? end($items) : []);
                } elseif (is_array($items)) {
                    $itemSchema = $items;
                }

                $normalizedPayload[$key] = self::normalizePayload($value, $itemSchema, $rootSchema);
            }

            return $normalizedPayload;
        }

        $normalizedPayload = [];
        $properties = is_array($schema['properties'] ?? null) ? $schema['properties'] : [];
        $additionalProperties = is_array($schema['additionalProperties'] ?? null)
            ? $schema['additionalProperties']
            : [];

        foreach ($payload as $key => $value) {
            $propertySchema = is_array($properties[$key] ?? null)
                ? $properties[$key]
                : $additionalProperties;
            $normalizedPayload[$key] = self::normalizePayload($value, $propertySchema, $rootSchema);
        }

        return (object) $normalizedPayload;
    }

    private static function isList(array $value): bool
    {
        if ($value === []) {
            return true;
        }

        return array_keys($value) === range(0, count($value) - 1);
    }

    private static function getSchemaId(array $schema): ?string
    {
        $schemaId = $schema['$id'] ?? $schema['id'] ?? null;

        return is_string($schemaId) ? $schemaId : null;
    }

    private static function containsUnsupportedSchemaId(array $schema): bool
    {
        if (isset($schema['$id']) && is_string($schema['$id']) && str_starts_with($schema['$id'], 'urn:OCPP:')) {
            return true;
        }

        foreach ($schema as $value) {
            if (is_array($value) && self::containsUnsupportedSchemaId($value)) {
                return true;
            }
        }

        return false;
    }

    private static function normalizeUnsupportedSchemaIds(array $schema): array
    {
        if (isset($schema['$id']) && is_string($schema['$id']) && str_starts_with($schema['$id'], 'urn:OCPP:')) {
            $schema['$id'] = self::normalizeSchemaId($schema['$id']);
        }

        foreach ($schema as $key => $value) {
            if (is_array($value)) {
                $schema[$key] = self::normalizeUnsupportedSchemaIds($value);
            }
        }

        return $schema;
    }

    private static function normalizeSchemaId(string $schemaId): string
    {
        $normalizedId = substr($schemaId, strlen('urn:OCPP:'));

        return 'ocpp://' . str_replace(':', '/', $normalizedId);
    }

    private static function resolveSchema(array $schema, array $rootSchema): array
    {
        if (!isset($schema['$ref']) || !is_string($schema['$ref'])) {
            return $schema;
        }

        return self::resolveSchemaReference($schema['$ref'], $rootSchema);
    }

    private static function detectSchemaType(array $schema): string
    {
        $type = $schema['type'] ?? null;

        if (is_array($type)) {
            $nonNullTypes = array_values(array_filter($type, static fn (mixed $value): bool => $value !== 'null'));
            $type = $nonNullTypes[0] ?? 'null';
        }

        if (is_string($type)) {
            return $type;
        }

        if (isset($schema['items'])) {
            return 'array';
        }

        return 'object';
    }

    private static function resolveSchemaReference(string $reference, array $rootSchema): array
    {
        if (!str_starts_with($reference, '#/')) {
            return [];
        }

        $segments = explode('/', substr($reference, 2));
        $current = $rootSchema;

        foreach ($segments as $segment) {
            $segment = str_replace(['~1', '~0'], ['/', '~'], $segment);

            if (!is_array($current) || !array_key_exists($segment, $current)) {
                return [];
            }

            $current = $current[$segment];
        }

        return is_array($current) ? $current : [];
    }
}
