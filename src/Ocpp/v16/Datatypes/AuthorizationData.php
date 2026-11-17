<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;

class AuthorizationData extends Datatype
{
	public string $idTag;
	public ?IdTagInfo $idTagInfo = null;
}
