<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the CertificateSigningUse field of a value in CertificateSignedRequest , SignCertificateRequest.
 */
enum CertificateSigningUse: string
{
	case ChargingStationCertificate = 'ChargingStationCertificate';
	case V2GCertificate = 'V2GCertificate';
	case V2G20Certificate = 'V2G20Certificate';
}
