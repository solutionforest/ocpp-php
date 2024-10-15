<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;

class ClearChargingProfile extends Call
{
	public ?int $id;
	public ?int $connectorId;
	public ?string $chargingProfilePurpose;
	public ?int $stackLevel;
}
