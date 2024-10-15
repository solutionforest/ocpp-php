<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;

class RemoteStartTransaction extends Call
{
	public ?int $connectorId;
	public string $idTag;
	public ?object $chargingProfile;
}
