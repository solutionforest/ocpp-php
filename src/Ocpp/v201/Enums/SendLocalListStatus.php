<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Enums;

/**
 * Values of the SendLocalListStatus field of a value in SendLocalListResponse.
 */
enum SendLocalListStatus: string
{
	case Accepted = 'Accepted';
	case Failed = 'Failed';
	case VersionMismatch = 'VersionMismatch';
}
