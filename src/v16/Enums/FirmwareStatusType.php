<?php

namespace SolutionForest\OocpPhp\Enums;

/**
 * Values of the FirmwareStatusType field of a value in SignedFirmwareStatusNotification.
 */
enum FirmwareStatusType
{
	case Downloaded;
	case DownloadFailed;
	case Downloading;
	case DownloadScheduled;
	case DownloadPaused;
	case Idle;
	case InstallationFailed;
	case Installing;
	case Installed;
	case InstallRebooting;
	case InstallScheduled;
	case InstallVerificationFailed;
	case InvalidSignature;
	case SignatureVerified;
}
