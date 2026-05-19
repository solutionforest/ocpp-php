<?php

declare(strict_types=1);

require_once __DIR__ . '/Support/JsonSchemaExampleFactory.php';

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use SolutionForest\OcppPhp\Ocpp\Exceptions\ProtocolError;
use SolutionForest\OcppPhp\Ocpp\JsonSchemaValidator;
use SolutionForest\OcppPhp\Ocpp\Messages\CallError;

final class JsonSchemaValidatorTest extends TestCase
{
    #[DataProvider('provideAllSchemas')]
    public function test_validates_generated_payload_for_every_schema(
        string $schemaPath,
        string $version,
        string $action,
        int $messageTypeId,
    ): void {
        $schema = json_decode((string) file_get_contents($schemaPath), true, 512, JSON_THROW_ON_ERROR);
        $payload = JsonSchemaExampleFactory::createPayload($schema);

        $message = [
            'messageTypeID' => $messageTypeId,
            'uniqueId' => md5($schemaPath),
            'action' => $action,
            'payload' => $payload,
        ];

        $result = JsonSchemaValidator::validate($message, $version, true);

        self::assertTrue(
            $result === true,
            $this->buildValidationFailureMessage($schemaPath, $payload, $result),
        );
    }

    public function test_returns_call_error_for_invalid_install_certificate_payload(): void
    {
        $message = [
            'messageTypeID' => 2,
            'uniqueId' => 'test-install-invalid',
            'action' => 'InstallCertificate',
            'payload' => [
                'certificateType' => 'CentralSystemRootCertificate',
            ],
        ];

        $result = JsonSchemaValidator::validate($message, 'v1.6', false);

        self::assertInstanceOf(ProtocolError::class, $result);
        self::assertSame(['The property certificate is required'], $result->errorDetails);
    }

    public function test_throws_protocol_error_exception_for_invalid_install_certificate_payload(): void
    {
        $message = [
            'messageTypeID' => 2,
            'uniqueId' => 'test-install-invalid',
            'action' => 'InstallCertificate',
            'payload' => [
                'certificateType' => 'CentralSystemRootCertificate',
            ],
        ];

        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('ProtocolError: The property certificate is required');

        JsonSchemaValidator::validate($message, 'v1.6', true);
    }

    /**
     * @return iterable<string, array{string, string, string, int}>
     */
    public static function provideAllSchemas(): iterable
    {
        foreach (self::schemaFiles() as $schemaPath) {
            [$version, $action, $messageTypeId] = self::describeSchema($schemaPath);

            yield self::relativePath($schemaPath) => [$schemaPath, $version, $action, $messageTypeId];
        }
    }

    /**
     * @return list<string>
     */
    private static function schemaFiles(): array
    {
        $schemaFiles = array_merge(
            glob(dirname(__DIR__) . '/src/Ocpp/v16/Schemas/*.json') ?: [],
            glob(dirname(__DIR__) . '/src/Ocpp/v201/Schemas/*.json') ?: [],
        );

        sort($schemaFiles);

        return $schemaFiles;
    }

    /**
     * @return array{string, string, int}
     */
    private static function describeSchema(string $schemaPath): array
    {
        $filename = pathinfo($schemaPath, PATHINFO_FILENAME);
        $isResponse = str_ends_with($filename, 'Response');
        $version = str_contains($schemaPath, '/v201/') ? 'v2.0.1' : 'v1.6';

        if ($version === 'v2.0.1') {
            $action = preg_replace('/(Request|Response)$/', '', $filename);
        } else {
            $action = $isResponse ? preg_replace('/Response$/', '', $filename) : $filename;
        }

        if (!is_string($action) || $action === '') {
            throw new RuntimeException("Unable to derive action for schema {$schemaPath}");
        }

        return [$version, $action, $isResponse ? 3 : 2];
    }

    private static function relativePath(string $schemaPath): string
    {
        return str_replace(dirname(__DIR__) . '/', '', $schemaPath);
    }

    private function buildValidationFailureMessage(string $schemaPath, array $payload, bool|CallError $result): string
    {
        $message = 'Validation failed for schema ' . self::relativePath($schemaPath);

        if ($result instanceof CallError && $result->errorDetails !== []) {
            $message .= ': ' . implode('; ', $result->errorDetails);
        }

        $encodedPayload = json_encode($payload, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
        if (is_string($encodedPayload)) {
            $message .= "\nPayload:\n" . $encodedPayload;
        }

        return $message;
    }
}