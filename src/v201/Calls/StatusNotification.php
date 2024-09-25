<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class StatusNotification
{
	public string $timestamp;
	public string $connectorStatus;
	public int $evseId;
	public int $connectorId;
}
