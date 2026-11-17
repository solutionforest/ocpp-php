<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the CertificateSignedStatus field of a value in CertificateSignedResponse.
 */
enum CertificateSignedStatus: string
{
	case Accepted = 'Accepted';
	case Rejected = 'Rejected';
}
