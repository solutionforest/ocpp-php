<?php

namespace SolutionForest\OcppPhp\Ocpp\Messages;

use SolutionForest\OcppPhp\Ocpp\Exceptions\FormatViolationError;
use SolutionForest\OcppPhp\Ocpp\Exceptions\FormationViolationError;
use SolutionForest\OcppPhp\Ocpp\Exceptions\GenericError;
use SolutionForest\OcppPhp\Ocpp\Exceptions\InternalError;
use SolutionForest\OcppPhp\Ocpp\Exceptions\NotImplementedError;
use SolutionForest\OcppPhp\Ocpp\Exceptions\NotSupportedError;
use SolutionForest\OcppPhp\Ocpp\Exceptions\OccurenceConstraintViolationError;
use SolutionForest\OcppPhp\Ocpp\Exceptions\OccurrenceConstraintViolationError;
use SolutionForest\OcppPhp\Ocpp\Exceptions\PropertyConstraintViolationError;
use SolutionForest\OcppPhp\Ocpp\Exceptions\ProtocolError;
use SolutionForest\OcppPhp\Ocpp\Exceptions\SecurityError;
use SolutionForest\OcppPhp\Ocpp\Exceptions\TypeConstraintViolationError;
use SolutionForest\OcppPhp\Ocpp\Exceptions\UnknownCallErrorCodeError;

abstract class CallError extends Message
{
    public int $messageTypeID = 4;

    public string $errorCode;

    public string $errorDescription = '';

    public array $errorDetails = [];

    /**
     * Map of OCPP error code strings to their corresponding CallError exception classes.
     *
     * @var array<string, class-string<CallError>>
     */
    private const ERROR_CODE_MAP = [
        'NotImplemented' => NotImplementedError::class,
        'NotSupported' => NotSupportedError::class,
        'InternalError' => InternalError::class,
        'ProtocolError' => ProtocolError::class,
        'SecurityError' => SecurityError::class,
        'FormatViolation' => FormatViolationError::class,
        'FormationViolation' => FormationViolationError::class,
        'GenericError' => GenericError::class,
        'TypeConstraintViolation' => TypeConstraintViolationError::class,
        'OccurrenceConstraintViolation' => OccurrenceConstraintViolationError::class,
        'OccurenceConstraintViolation' => OccurenceConstraintViolationError::class,
        'PropertyConstraintViolation' => PropertyConstraintViolationError::class,
    ];


    public function __construct(string $uniqueId, ?string $errorCode = null, ?string $errorDescription = null, ?array $errorDetails = null)
    {
        $this->uniqueId = $uniqueId;

        if ($errorCode !== null) {
            $this->errorCode = $errorCode;
        }
        if ($errorDescription !== null) {
            $this->errorDescription = $errorDescription;
        }
        if ($errorDetails !== null) {
            $this->errorDetails = $errorDetails;
        }
    }

    /**
     * Create a CallError object from a raw OCPP message array.
     *
     * @param array $message The raw OCPP message [4, UniqueId, errorCode, errorDescription, errorDetails]
     * @return static
     */
    public static function fromArray(array $message): static
    {
        if ($message[0] !== 4) {
            throw new \Exception("Invalid message type for CallError, expected 4 got {$message[0]}");
        }

        $uniqueId = $message[1];
        $errorCode = $message[2] ?? '';
        $errorDescription = $message[3] ?? '';
        $errorDetails = $message[4] ?? [];

        $class = self::ERROR_CODE_MAP[$errorCode] ?? UnknownCallErrorCodeError::class;

        /** @var static $instance */
        $instance = new $class($uniqueId);
        $instance->errorCode = $errorCode;
        $instance->errorDescription = $errorDescription;
        $instance->errorDetails = (array) $errorDetails;

        return $instance;
    }

    public function toArray(): array
    {
        return [
            $this->messageTypeID,
            $this->uniqueId,
            $this->errorCode,
            $this->errorDescription,
            (object) $this->errorDetails,
        ];
    }
}
