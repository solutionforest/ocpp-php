<?php

namespace SolutionForest\OocpPhp\CallResults;

abstract class GetCompositeSchedule
{
	public string $status;
	public ?array $statusInfo = null;
	public ?array $schedule = null;
}
