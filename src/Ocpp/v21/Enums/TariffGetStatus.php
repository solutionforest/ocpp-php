<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the TariffGetStatus field of a value in GetTariffsResponse.
 */
enum TariffGetStatus: string
{
	case Accepted = 'Accepted';
	case Rejected = 'Rejected';
	case NoTariff = 'NoTariff';
}
