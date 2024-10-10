<?php

namespace SolutionForest\OcppPhp\v16\Calls;

use SolutionForest\OcppPhp\Messages\Call;

class ClearChargingProfile extends Call
{
	public ?int $id;
	public ?int $connectorId;
	public ?string $chargingProfilePurpose;
	public ?int $stackLevel;
}
