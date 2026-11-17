<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the CertificateAction field of a value in Get15118EVCertificateRequest.
 */
enum CertificateAction: string
{
	case Install = 'Install';
	case Update = 'Update';
}
