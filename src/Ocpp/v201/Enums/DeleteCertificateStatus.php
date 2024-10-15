<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Enums;

/**
 * Values of the DeleteCertificateStatus field of a value in DeleteCertificateResponse.
 */
enum DeleteCertificateStatus: string
{
	case Accepted = 'Accepted';
	case Failed = 'Failed';
	case NotFound = 'NotFound';
}
