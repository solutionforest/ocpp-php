<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;

class FirmwareType extends Datatype
{
	public string $location;
	public string $retrieveDateTime;
	public ?string $installDateTime = null;
	public string $signingCertificate;
	public string $signature;
}
