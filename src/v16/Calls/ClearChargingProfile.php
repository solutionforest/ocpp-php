<?php

namespace SolutionForest\OcppPhp\v16\Calls;

use SolutionForest\OcppPhp\Messages\Call;

class ClearChargingProfile extends Call
{
	public ?int $id = null;
	public ?int $connectorId = null;
	public ?string $chargingProfilePurpose = null;
	public ?int $stackLevel = null;
}
