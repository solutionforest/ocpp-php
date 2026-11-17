<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;

class KeyValue extends Datatype
{
	public string $key;
	public bool $readonly;
	public ?string $value = null;
}
