<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Enums;

/**
 * Values of the UpdateStatus field of a value in SendLocalListResponse.
 */
enum UpdateStatus: string
{
	case Accepted = 'Accepted';
	case Failed = 'Failed';
	case NotSupported = 'NotSupported';
	case VersionMismatch = 'VersionMismatch';
}
