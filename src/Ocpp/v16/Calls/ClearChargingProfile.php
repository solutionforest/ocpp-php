<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v16\Enums\ChargingProfilePurposeType;

class ClearChargingProfile extends Call
{
	public ?int $id = null;
	public ?int $connectorId = null;
	public null|string|ChargingProfilePurposeType $chargingProfilePurpose = null;
	public ?int $stackLevel = null;
}
