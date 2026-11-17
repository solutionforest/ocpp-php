<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the CertificateStatusSource field of a value in GetCertificateChainStatusRequest , GetCertificateChainStatusResponse.
 */
enum CertificateStatusSource: string
{
	case CRL = 'CRL';
	case OCSP = 'OCSP';
}
