<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Enums;

/**
 * Values of the AuthorizationStatus field of a value in AuthorizeResponse , SendLocalList , StartTransactionResponse , StopTransactionResponse.
 */
enum AuthorizationStatus: string
{
	case Accepted = 'Accepted';
	case Blocked = 'Blocked';
	case Expired = 'Expired';
	case Invalid = 'Invalid';
	case ConcurrentTx = 'ConcurrentTx';
}
