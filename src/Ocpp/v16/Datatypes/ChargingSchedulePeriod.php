<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;

class ChargingSchedulePeriod extends Datatype
{
	public int $startPeriod;
	public float $limit;
	public ?int $numberPhases = null;
}
