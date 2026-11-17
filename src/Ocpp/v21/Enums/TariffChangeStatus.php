<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the TariffChangeStatus field of a value in ChangeTransactionTariffResponse.
 */
enum TariffChangeStatus: string
{
	case Accepted = 'Accepted';
	case Rejected = 'Rejected';
	case TooManyElements = 'TooManyElements';
	case ConditionNotSupported = 'ConditionNotSupported';
	case TxNotFound = 'TxNotFound';
	case NoCurrencyChange = 'NoCurrencyChange';
}
