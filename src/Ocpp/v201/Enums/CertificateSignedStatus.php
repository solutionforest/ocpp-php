<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Enums;

/**
 * Values of the CertificateSignedStatus field of a value in CertificateSignedResponse.
 */
enum CertificateSignedStatus: string
{
	case Accepted = 'Accepted';
	case Rejected = 'Rejected';
}
