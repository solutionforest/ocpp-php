<?php

namespace SolutionForest\OcppPhp\v201\Enums;

/**
 * Values of the UnpublishFirmwareStatus field of a value in UnpublishFirmwareResponse.
 */
enum UnpublishFirmwareStatus: string
{
	case DownloadOngoing = 'DownloadOngoing';
	case NoFirmware = 'NoFirmware';
	case Unpublished = 'Unpublished';
}
