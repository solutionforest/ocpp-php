<?php

namespace SolutionForest\OocpPhp\Enums;

/**
 * Values of the UpdateFirmwareStatusType field of a value in SignedUpdateFirmware.
 */
enum UpdateFirmwareStatusType
{
	case Accepted;
	case Rejected;
	case AcceptedCanceled;
	case InvalidCertificate;
	case RevokedCertificate;
}
