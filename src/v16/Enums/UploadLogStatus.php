<?php

namespace SolutionForest\OocpPhp\v16\Enums;

/**
 * Values of the UploadLogStatus field of a value in LogStatusNotification.
 */
enum UploadLogStatus: string
{
	case BadMessage = 'BadMessage';
	case Idle = 'Idle';
	case NotSupportedOperation = 'NotSupportedOperation';
	case PermissionDenied = 'PermissionDenied';
	case Uploaded = 'Uploaded';
	case UploadFailure = 'UploadFailure';
	case Uploading = 'Uploading';
}
