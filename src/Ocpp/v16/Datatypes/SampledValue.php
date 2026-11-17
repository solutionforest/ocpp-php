<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;
use SolutionForest\OcppPhp\Ocpp\v16\Enums\Location;
use SolutionForest\OcppPhp\Ocpp\v16\Enums\Measurand;
use SolutionForest\OcppPhp\Ocpp\v16\Enums\Phase;
use SolutionForest\OcppPhp\Ocpp\v16\Enums\ReadingContext;
use SolutionForest\OcppPhp\Ocpp\v16\Enums\UnitOfMeasure;
use SolutionForest\OcppPhp\Ocpp\v16\Enums\ValueFormat;

class SampledValue extends Datatype
{
	public string $value;
	public null|string|ReadingContext $context = null;
	public null|string|ValueFormat $format = null;
	public null|string|Measurand $measurand = null;
	public null|string|Phase $phase = null;
	public null|string|Location $location = null;
	public null|string|UnitOfMeasure $unit = null;
}
