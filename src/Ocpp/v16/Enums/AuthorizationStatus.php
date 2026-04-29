<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Enums;

/**
 * Values of the AuthorizationStatus field of a value in AuthorizeResponse , SendLocalListRequest , TransactionEventResponse.
 */
enum AuthorizationStatus: string
{
	case Accepted = 'Accepted';
	case Blocked = 'Blocked';
	case ConcurrentTx = 'ConcurrentTx';
	case Expired = 'Expired';
	case Invalid = 'Invalid';
}
