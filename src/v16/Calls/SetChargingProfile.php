<?php

namespace SolutionForest\OcppPhp\Calls;

abstract class SetChargingProfile
{
	public int $connectorId;
	public array $csChargingProfiles;
}
