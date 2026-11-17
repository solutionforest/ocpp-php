<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;
use SolutionForest\OcppPhp\Ocpp\v16\Enums\HashAlgorithm;

class CertificateHashDataType extends Datatype
{
	public string|HashAlgorithm $hashAlgorithm;
	public string $issuerNameHash;
	public string $issuerKeyHash;
	public string $serialNumber;
}
