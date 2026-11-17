<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Enums;

/**
 * Values of the ValueFormat field of a value in MeterValues , StopTransaction.
 */
enum ValueFormat: string
{
	case Raw = 'Raw';
	case SignedData = 'SignedData';
}
