<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Enums;

/**
 * Values of the HashAlgorithm field of a value in DeleteCertificate , GetInstalledCertificateIdsResponse.
 */
enum HashAlgorithm: string
{
	case SHA256 = 'SHA256';
	case SHA384 = 'SHA384';
	case SHA512 = 'SHA512';
}
