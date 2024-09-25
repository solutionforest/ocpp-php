<?php

namespace SolutionForest\OocpPhp\Enums;

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
	case NoCredit = 'NoCredit';
	case NotAllowedTypeEVSE = 'NotAllowedTypeEVSE';
	case NotAtThisLocation = 'NotAtThisLocation';
	case NotAtThisTime = 'NotAtThisTime';
	case Unknown = 'Unknown';
}
