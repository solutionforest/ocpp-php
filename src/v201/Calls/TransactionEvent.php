<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class TransactionEvent
{
	public string $eventType;
	public ?array $meterValue = null;
	public string $timestamp;
	public string $triggerReason;
	public int $seqNo;
	public ?bool $offline = null;
	public ?int $numberOfPhasesUsed = null;
	public ?int $cableMaxCurrent = null;
	public ?int $reservationId = null;
	public array $transactionInfo;
	public ?array $evse = null;
	public ?array $idToken = null;
}
