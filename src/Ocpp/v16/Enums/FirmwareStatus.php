<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Enums;

/**
 * Values of the FirmwareStatus field of a value in FirmwareStatusNotification , SignedFirmwareStatusNotification.
 */
enum FirmwareStatus: string
{
	case Downloaded = 'Downloaded';
	case DownloadFailed = 'DownloadFailed';
	case Downloading = 'Downloading';
	case Idle = 'Idle';
	case InstallationFailed = 'InstallationFailed';
	case Installing = 'Installing';
	case Installed = 'Installed';
	case DownloadScheduled = 'DownloadScheduled';
	case DownloadPaused = 'DownloadPaused';
	case InstallRebooting = 'InstallRebooting';
	case InstallScheduled = 'InstallScheduled';
	case InstallVerificationFailed = 'InstallVerificationFailed';
	case InvalidSignature = 'InvalidSignature';
	case SignatureVerified = 'SignatureVerified';
}
