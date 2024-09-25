<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class ClearedChargingLimit
{
	public string $chargingLimitSource;
	public ?int $evseId = null;
}
