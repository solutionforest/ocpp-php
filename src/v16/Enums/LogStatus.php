<?php

namespace SolutionForest\OocpPhp\Enums;

/**
 * Values of the LogStatus field of a value in GetLogResponse.
 */
enum LogStatus: string
{
	case Accepted = 'Accepted';
	case Rejected = 'Rejected';
	case AcceptedCanceled = 'AcceptedCanceled';
}
