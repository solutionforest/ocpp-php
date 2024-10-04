<?php

namespace SolutionForest\OcppPhp\v201\Enums;

/**
 * Values of the GetCertificateIdUse field of a value in GetInstalledCertificateIdsRequest , GetInstalledCertificateIdsResponse.
 */
enum GetCertificateIdUse: string
{
	case V2GRootCertificate = 'V2GRootCertificate';
	case MORootCertificate = 'MORootCertificate';
	case CSMSRootCertificate = 'CSMSRootCertificate';
	case V2GCertificateChain = 'V2GCertificateChain';
	case ManufacturerRootCertificate = 'ManufacturerRootCertificate';
}
