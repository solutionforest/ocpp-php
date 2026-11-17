<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Enums;

/**
 * Values of the DiagnosticsStatus field of a value in DiagnosticsStatusNotification.
 */
enum DiagnosticsStatus: string
{
	case Idle = 'Idle';
	case Uploaded = 'Uploaded';
	case UploadFailed = 'UploadFailed';
	case Uploading = 'Uploading';
}
