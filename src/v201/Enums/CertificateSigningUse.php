<?php

namespace SolutionForest\OcppPhp\v201\Enums;

/**
 * Values of the CertificateSigningUse field of a value in CertificateSignedRequest , SignCertificateRequest.
 */
enum CertificateSigningUse: string
{
	case ChargingStationCertificate = 'ChargingStationCertificate';
	case V2GCertificate = 'V2GCertificate';
}
