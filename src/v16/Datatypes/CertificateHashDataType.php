<?php

namespace SolutionForest\OocpPhp\v16\Datatypes;

use SolutionForest\OocpPhp\v16\Enums\HashAlgorithm;

class CertificateHashDataType
{
	public string|HashAlgorithm $hashAlgorithm;
	public string $issuerNameHash;
	public string $issuerKeyHash;
	public string $serialNumber;
}
