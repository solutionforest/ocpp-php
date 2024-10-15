<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Enums;

/**
 * Values of the GetDisplayMessagesStatus field of a value in GetDisplayMessagesResponse.
 */
enum GetDisplayMessagesStatus: string
{
	case Accepted = 'Accepted';
	case Unknown = 'Unknown';
}
