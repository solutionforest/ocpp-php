<?php

abstract class StopTransaction
{
	public ?string $idTag = null;
	public int $meterStop;
	public string $timestamp;
	public int $transactionId;
	public ?string $reason = null;
	public ?array $transactionData = null;
}
