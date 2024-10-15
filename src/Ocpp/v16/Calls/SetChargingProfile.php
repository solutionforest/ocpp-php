<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;

class SetChargingProfile extends Call
{
	public int $connectorId;
	public object $csChargingProfiles;
}
