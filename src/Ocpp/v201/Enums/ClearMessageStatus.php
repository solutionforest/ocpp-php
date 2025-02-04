<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Enums;

/**
 * Values of the ClearMessageStatus field of a value in ClearDisplayMessageResponse.
 */
enum ClearMessageStatus: string
{
	case Accepted = 'Accepted';
	case Unknown = 'Unknown';
}
