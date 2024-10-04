<?php

namespace SolutionForest\OcppPhp\v201\Enums;

/**
 * Values of the TransactionEvent field of a value in TransactionEventRequest.
 */
enum TransactionEvent: string
{
	case Ended = 'Ended';
	case Started = 'Started';
	case Updated = 'Updated';
}
