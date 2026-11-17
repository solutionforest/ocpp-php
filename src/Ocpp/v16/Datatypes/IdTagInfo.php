<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;
use SolutionForest\OcppPhp\Ocpp\v16\Enums\AuthorizationStatus;

class IdTagInfo extends Datatype
{
	public ?string $expiryDate = null;
	public ?string $parentIdTag = null;
	public string|AuthorizationStatus $status;
}
