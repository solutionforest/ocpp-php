<?php

namespace SolutionForest\OcppPhp\v16\Calls;

use SolutionForest\OcppPhp\Messages\Call;

class RemoteStartTransaction extends Call
{
	public ?int $connectorId;
	public string $idTag;
	public ?object $chargingProfile;
}
