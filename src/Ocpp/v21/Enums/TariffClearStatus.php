<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the TariffClearStatus field of a value in ClearTariffsResponse.
 */
enum TariffClearStatus: string
{
	case Accepted = 'Accepted';
	case Rejected = 'Rejected';
	case NoTariff = 'NoTariff';
}
