<?php

namespace SolutionForest\OocpPhp\v16\Datatypes;

class CertificateHashDataType
{
	public string|\SolutionForest\OocpPhp\v16\Enums\HashAlgorithm $hashAlgorithm;
	public string $issuerNameHash;
	public string $issuerKeyHash;
	public string $serialNumber;
}
