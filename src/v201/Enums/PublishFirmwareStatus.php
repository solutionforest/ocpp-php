<?php

namespace SolutionForest\OocpPhp\v201\Enums;

/**
 * Values of the PublishFirmwareStatus field of a value in PublishFirmwareStatusNotificationRequest.
 */
enum PublishFirmwareStatus: string
{
	case Idle = 'Idle';
	case DownloadScheduled = 'DownloadScheduled';
	case Downloading = 'Downloading';
	case Downloaded = 'Downloaded';
	case Published = 'Published';
	case DownloadFailed = 'DownloadFailed';
	case DownloadPaused = 'DownloadPaused';
	case InvalidChecksum = 'InvalidChecksum';
	case ChecksumVerified = 'ChecksumVerified';
	case PublishFailed = 'PublishFailed';
}
