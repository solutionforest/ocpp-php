<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the HashAlgorithm field of a value in AuthorizeRequest , CustomerInformationRequest , DeleteCertificateRequest , GetCertificateChainStatusRequest , GetCertificateChainStatusResponse , GetCertificateStatusRequest , GetInstalledCertificateIdsResponse , SignCertificateRequest.
 */
enum HashAlgorithm: string
{
	case SHA256 = 'SHA256';
	case SHA384 = 'SHA384';
	case SHA512 = 'SHA512';
}
