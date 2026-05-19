<?php

declare(strict_types=1);

final class JsonSchemaExampleFactory
{
    public static function createPayload(array $schema): array
    {
        $payload = self::createValue($schema, $schema, []);

        if (!is_array($payload)) {
            throw new RuntimeException('Expected root payload to be represented as an array.');
        }

        return $payload;
    }

    /**
     * @param list<string> $refStack
     */
    private static function createValue(array $schema, array $rootSchema, array $refStack): mixed
    {
        if (isset($schema['$ref']) && is_string($schema['$ref'])) {
            $ref = $schema['$ref'];
            $resolvedSchema = self::resolveRef($rootSchema, $ref);

            if (in_array($ref, $refStack, true)) {
                return self::createCyclicFallback($resolvedSchema);
            }

            $refStack[] = $ref;

            return self::createValue($resolvedSchema, $rootSchema, $refStack);
        }

        if (array_key_exists('const', $schema)) {
            return $schema['const'];
        }

        if (isset($schema['enum']) && is_array($schema['enum']) && $schema['enum'] !== []) {
            return $schema['enum'][0];
        }

        if (array_key_exists('default', $schema)) {
            return $schema['default'];
        }

        return match (self::detectType($schema)) {
            'object' => self::createObject($schema, $rootSchema, $refStack),
            'array' => self::createArray($schema, $rootSchema, $refStack),
            'string' => self::createString($schema),
            'integer' => self::createInteger($schema),
            'number' => self::createNumber($schema),
            'boolean' => true,
            'null' => null,
            default => throw new RuntimeException('Unsupported schema type.'),
        };
    }

    private static function detectType(array $schema): string
    {
        $type = $schema['type'] ?? null;
        if (is_array($type)) {
            $nonNullTypes = array_values(array_filter($type, static fn (mixed $value): bool => $value !== 'null'));
            $type = $nonNullTypes[0] ?? 'null';
        }

        if (is_string($type)) {
            return $type;
        }

        if (isset($schema['properties']) || isset($schema['required'])) {
            return 'object';
        }

        if (isset($schema['items'])) {
            return 'array';
        }

        return 'object';
    }

    /**
     * @param list<string> $refStack
     * @return array<string, mixed>
     */
    private static function createObject(array $schema, array $rootSchema, array $refStack): array
    {
        $properties = $schema['properties'] ?? [];
        $required = $schema['required'] ?? [];
        $value = [];

        foreach ($required as $propertyName) {
            if (!is_string($propertyName) || !array_key_exists($propertyName, $properties) || !is_array($properties[$propertyName])) {
                throw new RuntimeException("Required property {$propertyName} is missing from the schema definition.");
            }

            $value[$propertyName] = self::createValue($properties[$propertyName], $rootSchema, $refStack);
        }

        return $value;
    }

    /**
     * @param list<string> $refStack
     * @return list<mixed>
     */
    private static function createArray(array $schema, array $rootSchema, array $refStack): array
    {
        if (!isset($schema['items'])) {
            return [];
        }

        $count = max(1, (int) ($schema['minItems'] ?? 0));
        $items = $schema['items'];
        $value = [];

        for ($index = 0; $index < $count; $index++) {
            if (is_array($items) && array_is_list($items)) {
                $itemSchema = $items[min($index, count($items) - 1)] ?? [];
            } else {
                $itemSchema = $items;
            }

            if (!is_array($itemSchema)) {
                throw new RuntimeException('Array item schema must be an array.');
            }

            $value[] = self::createValue($itemSchema, $rootSchema, $refStack);
        }

        return $value;
    }

    private static function createString(array $schema): string
    {
        $format = $schema['format'] ?? null;
        $value = match ($format) {
            'date-time' => '2024-01-01T00:00:00Z',
            'uri' => 'https://a.co',
            'uri-reference' => '/a',
            'date' => '2024-01-01',
            'time' => '00:00:00Z',
            default => str_repeat('x', self::resolveStringLength($schema)),
        };

        $maxLength = isset($schema['maxLength']) ? (int) $schema['maxLength'] : null;
        if ($maxLength !== null && strlen($value) > $maxLength && $format === null) {
            $value = substr($value, 0, $maxLength);
        }

        return $value;
    }

    private static function createInteger(array $schema): int
    {
        return (int) round(self::createNumericValue($schema, true));
    }

    private static function createNumber(array $schema): float
    {
        return round(self::createNumericValue($schema, false), 6);
    }

    private static function createNumericValue(array $schema, bool $integer): float
    {
        $minimum = self::resolveMinimum($schema, $integer);
        $maximum = self::resolveMaximum($schema, $integer);
        $multipleOf = isset($schema['multipleOf']) && is_numeric($schema['multipleOf'])
            ? (float) $schema['multipleOf']
            : null;

        $value = $minimum ?? 0.0;

        if ($multipleOf !== null && $multipleOf > 0.0) {
            if ($value <= 0.0 && ($minimum === null || $minimum <= 0.0)) {
                $value = 0.0;
            } else {
                $value = ceil($value / $multipleOf) * $multipleOf;
            }
        }

        if ($maximum !== null && $value > $maximum) {
            $value = $maximum;
        }

        if ($integer) {
            $value = round($value);
        }

        return $value;
    }

    private static function resolveMinimum(array $schema, bool $integer): ?float
    {
        $minimum = isset($schema['minimum']) && is_numeric($schema['minimum'])
            ? (float) $schema['minimum']
            : null;

        if (isset($schema['exclusiveMinimum']) && is_numeric($schema['exclusiveMinimum'])) {
            $exclusiveMinimum = (float) $schema['exclusiveMinimum'];
            return $integer ? $exclusiveMinimum + 1.0 : $exclusiveMinimum + 0.1;
        }

        if (($schema['exclusiveMinimum'] ?? false) === true && $minimum !== null) {
            return $integer ? $minimum + 1.0 : $minimum + 0.1;
        }

        return $minimum;
    }

    private static function resolveMaximum(array $schema, bool $integer): ?float
    {
        $maximum = isset($schema['maximum']) && is_numeric($schema['maximum'])
            ? (float) $schema['maximum']
            : null;

        if (isset($schema['exclusiveMaximum']) && is_numeric($schema['exclusiveMaximum'])) {
            $exclusiveMaximum = (float) $schema['exclusiveMaximum'];
            return $integer ? $exclusiveMaximum - 1.0 : $exclusiveMaximum - 0.1;
        }

        if (($schema['exclusiveMaximum'] ?? false) === true && $maximum !== null) {
            return $integer ? $maximum - 1.0 : $maximum - 0.1;
        }

        return $maximum;
    }

    private static function resolveStringLength(array $schema): int
    {
        $minLength = max(0, (int) ($schema['minLength'] ?? 0));
        $maxLength = isset($schema['maxLength']) ? (int) $schema['maxLength'] : null;
        $length = max(1, $minLength);

        if ($maxLength !== null) {
            $length = min($length, $maxLength);
        }

        return max(0, $length);
    }

    private static function createCyclicFallback(array $schema): mixed
    {
        return match (self::detectType($schema)) {
            'array' => [],
            'string' => self::createString($schema),
            'integer' => self::createInteger($schema),
            'number' => self::createNumber($schema),
            'boolean' => true,
            'null' => null,
            default => [],
        };
    }

    private static function resolveRef(array $rootSchema, string $ref): array
    {
        if (!str_starts_with($ref, '#/')) {
            throw new RuntimeException("Only internal schema references are supported: {$ref}");
        }

        $segments = explode('/', substr($ref, 2));
        $current = $rootSchema;

        foreach ($segments as $segment) {
            $segment = str_replace(['~1', '~0'], ['/', '~'], $segment);

            if (!is_array($current) || !array_key_exists($segment, $current)) {
                throw new RuntimeException("Unable to resolve schema reference {$ref}");
            }

            $current = $current[$segment];
        }

        if (!is_array($current)) {
            throw new RuntimeException("Resolved schema reference {$ref} is not an object schema.");
        }

        return $current;
    }
}