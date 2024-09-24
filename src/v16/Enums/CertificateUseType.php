<?php

namespace SolutionForest\OcppPhp\Enums;

/**
 * Values of the CertificateUseType field of a value in GetInstalledCertificateIds , InstallCertificate.
 */
enum CertificateUseType
{
	case CentralSystemRootCertificate;
	case ManufacturerRootCertificate;
}
