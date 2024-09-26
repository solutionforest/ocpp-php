<?php

namespace SolutionForest\OocpPhp\v16\Enums;

/**
 * Values of the TriggerMessageStatus field of a value in ExtendedTriggerMessageResponse.
 */
enum TriggerMessageStatus: string
{
	case Accepted = 'Accepted';
	case Rejected = 'Rejected';
	case NotImplemented = 'NotImplemented';
}
