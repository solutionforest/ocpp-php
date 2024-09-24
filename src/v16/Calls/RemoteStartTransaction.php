<?php

namespace SolutionForest\OcppPhp\Calls;

abstract class RemoteStartTransaction
{
	public ?int $connectorId = null;
	public string $idTag;
	public ?array $chargingProfile = null;
}
