<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the TariffKind field of a value in GetTariffsResponse.
 */
enum TariffKind: string
{
	case DefaultTariff = 'DefaultTariff';
	case DriverTariff = 'DriverTariff';
}
