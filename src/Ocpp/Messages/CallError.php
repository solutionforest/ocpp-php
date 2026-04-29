<?php

namespace SolutionForest\OcppPhp\Ocpp\Messages;

abstract class CallError extends Message
{
    public int $messageTypeID = 4;

    public string $errorCode;

    public string $errorDescription = '';

    public array $errorDetails = [];

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
