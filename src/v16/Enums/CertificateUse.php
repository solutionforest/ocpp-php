<?php

namespace SolutionForest\OcppPhp\v16\Enums;

/**
 * Values of the CertificateUse field of a value in GetInstalledCertificateIds , InstallCertificate.
 */
enum CertificateUse: string
{
	case CentralSystemRootCertificate = 'CentralSystemRootCertificate';
	case ManufacturerRootCertificate = 'ManufacturerRootCertificate';
}
