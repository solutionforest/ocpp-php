<?php

namespace SolutionForest\OocpPhp\v16\Calls;

use SolutionForest\OocpPhp\Call;

class ClearChargingProfile extends Call
{
	public ?int $id = null;
	public ?int $connectorId = null;
	public ?string $chargingProfilePurpose = null;
	public ?int $stackLevel = null;
}
