<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Enums;

/**
 * Values of the ReadingContext field of a value in MeterValuesRequest , TransactionEventRequest.
 */
enum ReadingContext: string
{
	case InterruptionBegin = 'Interruption.Begin';
	case InterruptionEnd = 'Interruption.End';
	case Other = 'Other';
	case SampleClock = 'Sample.Clock';
	case SamplePeriodic = 'Sample.Periodic';
	case TransactionBegin = 'Transaction.Begin';
	case TransactionEnd = 'Transaction.End';
	case Trigger = 'Trigger';
}
