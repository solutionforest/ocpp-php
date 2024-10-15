<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Enums;

/**
 * Values of the UploadLogStatus field of a value in LogStatusNotificationRequest.
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
	case AcceptedCanceled = 'AcceptedCanceled';
}
