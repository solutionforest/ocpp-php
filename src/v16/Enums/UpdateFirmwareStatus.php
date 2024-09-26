<?php

namespace SolutionForest\OocpPhp\v16\Enums;

/**
 * Values of the UpdateFirmwareStatus field of a value in SignedUpdateFirmwareResponse.
 */
enum UpdateFirmwareStatus: string
{
	case Accepted = 'Accepted';
	case Rejected = 'Rejected';
	case AcceptedCanceled = 'AcceptedCanceled';
	case InvalidCertificate = 'InvalidCertificate';
	case RevokedCertificate = 'RevokedCertificate';
}
