<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Enums;

/**
 * Values of the RemoteStartStopStatus field of a value in RemoteStartTransactionResponse , RemoteStopTransactionResponse.
 */
enum RemoteStartStopStatus: string
{
	case Accepted = 'Accepted';
	case Rejected = 'Rejected';
}
