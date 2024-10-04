<?php

namespace SolutionForest\OcppPhp\v16\Datatypes;

use SolutionForest\OcppPhp\v16\Enums\HashAlgorithm;

class CertificateHashDataType
{
	public string|HashAlgorithm $hashAlgorithm;
	public string $issuerNameHash;
	public string $issuerKeyHash;
	public string $serialNumber;
}
