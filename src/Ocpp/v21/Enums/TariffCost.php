<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the TariffCost field of a value in TransactionEventRequest.
 */
enum TariffCost: string
{
	case NormalCost = 'NormalCost';
	case MinCost = 'MinCost';
	case MaxCost = 'MaxCost';
}
