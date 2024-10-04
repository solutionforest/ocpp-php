<?php

namespace SolutionForest\OcppPhp\v16\Calls;

use SolutionForest\OcppPhp\Messages\Call;

class RemoteStartTransaction extends Call
{
	public ?int $connectorId = null;
	public string $idTag;
	public ?array $chargingProfile = null;
}
