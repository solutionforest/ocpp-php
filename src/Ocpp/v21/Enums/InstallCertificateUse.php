<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the InstallCertificateUse field of a value in InstallCertificateRequest.
 */
enum InstallCertificateUse: string
{
	case V2GRootCertificate = 'V2GRootCertificate';
	case MORootCertificate = 'MORootCertificate';
	case ManufacturerRootCertificate = 'ManufacturerRootCertificate';
	case CSMSRootCertificate = 'CSMSRootCertificate';
	case OEMRootCertificate = 'OEMRootCertificate';
}
