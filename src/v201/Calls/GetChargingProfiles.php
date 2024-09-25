<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class GetChargingProfiles
{
	public int $requestId;
	public ?int $evseId = null;
	public array $chargingProfile;
}
