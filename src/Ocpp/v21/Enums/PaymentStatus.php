<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the PaymentStatus field of a value in NotifySettlementRequest.
 */
enum PaymentStatus: string
{
	case Settled = 'Settled';
	case Canceled = 'Canceled';
	case Rejected = 'Rejected';
	case Failed = 'Failed';
}
