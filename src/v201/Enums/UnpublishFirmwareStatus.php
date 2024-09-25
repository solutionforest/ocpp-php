<?php

namespace SolutionForest\OocpPhp\Enums;

/**
 * Values of the UnpublishFirmwareStatus field of a value in UnpublishFirmwareResponse.
 */
enum UnpublishFirmwareStatus: string
{
	case DownloadOngoing = 'DownloadOngoing';
	case NoFirmware = 'NoFirmware';
	case Unpublished = 'Unpublished';
}
