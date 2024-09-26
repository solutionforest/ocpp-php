<?php

namespace SolutionForest\OocpPhp\v16\Calls;

abstract class RemoteStartTransaction
{
	public ?int $connectorId = null;
	public string $idTag;
	public ?array $chargingProfile = null;
}
