<?php

namespace SolutionForest\OcppPhp\v16\Calls;

use SolutionForest\OcppPhp\Messages\Call;

class SetChargingProfile extends Call
{
	public int $connectorId;
	public array $csChargingProfiles;
}
