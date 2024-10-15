<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Enums;

/**
 * Values of the CertificateAction field of a value in Get15118EVCertificateRequest.
 */
enum CertificateAction: string
{
	case Install = 'Install';
	case Update = 'Update';
}
