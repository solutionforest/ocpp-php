<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the DayOfWeek field of a value in AuthorizeResponse , ChangeTransactionTariffRequest , SetDefaultTariffRequest.
 */
enum DayOfWeek: string
{
	case Monday = 'Monday';
	case Tuesday = 'Tuesday';
	case Wednesday = 'Wednesday';
	case Thursday = 'Thursday';
	case Friday = 'Friday';
	case Saturday = 'Saturday';
	case Sunday = 'Sunday';
}
