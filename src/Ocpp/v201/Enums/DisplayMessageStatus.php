<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Enums;

/**
 * Values of the DisplayMessageStatus field of a value in SetDisplayMessageResponse.
 */
enum DisplayMessageStatus: string
{
	case Accepted = 'Accepted';
	case NotSupportedMessageFormat = 'NotSupportedMessageFormat';
	case Rejected = 'Rejected';
	case NotSupportedPriority = 'NotSupportedPriority';
	case NotSupportedState = 'NotSupportedState';
	case UnknownTransaction = 'UnknownTransaction';
}
