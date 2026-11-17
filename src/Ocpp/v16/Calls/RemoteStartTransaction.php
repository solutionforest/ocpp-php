<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v16\Datatypes\ChargingProfile;

class RemoteStartTransaction extends Call
{
	public ?int $connectorId = null;
	public string $idTag;
	public ?ChargingProfile $chargingProfile = null;
}
