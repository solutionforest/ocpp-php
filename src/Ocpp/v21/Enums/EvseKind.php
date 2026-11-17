<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the EvseKind field of a value in AuthorizeResponse , ChangeTransactionTariffRequest , SetDefaultTariffRequest.
 */
enum EvseKind: string
{
	case AC = 'AC';
	case DC = 'DC';
}
