<?php

namespace SolutionForest\OocpPhp\v16\Calls;

class RemoteStartTransaction
{
	public ?int $connectorId = null;
	public string $idTag;
	public ?array $chargingProfile = null;
}
