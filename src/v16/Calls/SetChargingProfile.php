<?php

namespace SolutionForest\OocpPhp\v16\Calls;

use SolutionForest\OocpPhp\Messages\Call;

class SetChargingProfile extends Call
{
	public int $connectorId;
	public array $csChargingProfiles;
}
