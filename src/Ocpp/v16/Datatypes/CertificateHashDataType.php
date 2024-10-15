<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Datatypes;

use SolutionForest\OcppPhp\Ocpp\v16\Enums\HashAlgorithm;

class CertificateHashDataType
{
	public string|HashAlgorithm $hashAlgorithm;
	public string $issuerNameHash;
	public string $issuerKeyHash;
	public string $serialNumber;
}
