<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Enums;

/**
 * Values of the GetInstalledCertificateStatus field of a value in GetInstalledCertificateIdsResponse.
 */
enum GetInstalledCertificateStatus: string
{
	case Accepted = 'Accepted';
	case NotFound = 'NotFound';
}
