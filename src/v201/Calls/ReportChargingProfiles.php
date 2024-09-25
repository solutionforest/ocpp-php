<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class ReportChargingProfiles
{
	public int $requestId;
	public string $chargingLimitSource;
	public array $chargingProfile;
	public ?bool $tbc = null;
	public int $evseId;
}
