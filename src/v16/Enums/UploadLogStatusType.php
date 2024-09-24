<?php

namespace SolutionForest\OcppPhp\Enums;

/**
 * Values of the UploadLogStatusType field of a value in LogStatusNotification.
 */
enum UploadLogStatusType
{
	case BadMessage;
	case Idle;
	case NotSupportedOperation;
	case PermissionDenied;
	case Uploaded;
	case UploadFailure;
	case Uploading;
}
