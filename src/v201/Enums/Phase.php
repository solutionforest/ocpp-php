<?php

namespace SolutionForest\OcppPhp\v201\Enums;

/**
 * Values of the Phase field of a value in MeterValuesRequest , TransactionEventRequest.
 */
enum Phase: string
{
	case L1 = 'L1';
	case L2 = 'L2';
	case L3 = 'L3';
	case N = 'N';
	case L1N = 'L1-N';
	case L2N = 'L2-N';
	case L3N = 'L3-N';
	case L1L2 = 'L1-L2';
	case L2L3 = 'L2-L3';
	case L3L1 = 'L3-L1';
}
