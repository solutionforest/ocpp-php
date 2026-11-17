<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the TariffSetStatus field of a value in SetDefaultTariffResponse.
 */
enum TariffSetStatus: string
{
	case Accepted = 'Accepted';
	case Rejected = 'Rejected';
	case TooManyElements = 'TooManyElements';
	case ConditionNotSupported = 'ConditionNotSupported';
	case DuplicateTariffId = 'DuplicateTariffId';
}
