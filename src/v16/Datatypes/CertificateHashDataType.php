<?php

namespace SolutionForest\OocpPhp\v16\Datatypes;

abstract class CertificateHashDataType
{
	public null|string|\SolutionForest\OocpPhp\v16\Enums\HashAlgorithm $hashAlgorithm = null;
	public ?string $issuerNameHash = null;
	public ?string $issuerKeyHash = null;
	public ?string $serialNumber = null;
}
