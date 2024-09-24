<?php

namespace SolutionForest\OocpPhp\Enums;

/**
 * Values of the HashAlgorithmType field of a value in DeleteCertificate , GetInstalledCertificateIds.
 */
enum HashAlgorithmType
{
	case SHA256;
	case SHA384;
	case SHA512;
}
