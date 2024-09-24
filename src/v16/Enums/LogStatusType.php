<?php

namespace SolutionForest\OcppPhp\Enums;

/**
 * Values of the LogStatusType field of a value in GetLog.
 */
enum LogStatusType
{
	case Accepted;
	case Rejected;
	case AcceptedCanceled;
}
