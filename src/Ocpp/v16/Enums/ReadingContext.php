<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Enums;

/**
 * Values of the ReadingContext field of a value in MeterValues , StopTransaction.
 */
enum ReadingContext: string
{
	case InterruptionBegin = 'Interruption.Begin';
	case InterruptionEnd = 'Interruption.End';
	case SampleClock = 'Sample.Clock';
	case SamplePeriodic = 'Sample.Periodic';
	case TransactionBegin = 'Transaction.Begin';
	case TransactionEnd = 'Transaction.End';
	case Trigger = 'Trigger';
	case Other = 'Other';
}
