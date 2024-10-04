<?php

namespace SolutionForest\OcppPhp\v201\Enums;

/**
 * Values of the RequestStartStopStatus field of a value in RequestStartTransactionResponse , RequestStopTransactionResponse.
 */
enum RequestStartStopStatus: string
{
	case Accepted = 'Accepted';
	case Rejected = 'Rejected';
}
