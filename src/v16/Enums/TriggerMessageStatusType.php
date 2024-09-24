<?php

namespace SolutionForest\OcppPhp\Enums;

/**
 * Values of the TriggerMessageStatusType field of a value in ExtendedTriggerMessage.
 */
enum TriggerMessageStatusType
{
	case Accepted;
	case Rejected;
	case NotImplemented;
}
