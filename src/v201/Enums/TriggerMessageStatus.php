<?php

namespace SolutionForest\OcppPhp\v201\Enums;

/**
 * Values of the TriggerMessageStatus field of a value in TriggerMessageResponse.
 */
enum TriggerMessageStatus: string
{
	case Accepted = 'Accepted';
	case Rejected = 'Rejected';
	case NotImplemented = 'NotImplemented';
}
