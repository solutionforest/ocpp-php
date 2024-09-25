<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class NotifyEvent
{
	public string $generatedAt;
	public ?bool $tbc = null;
	public int $seqNo;
	public array $eventData;
}
