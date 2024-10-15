<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Enums;

/**
 * Values of the EnergyTransferMode field of a value in NotifyEVChargingNeedsRequest.
 */
enum EnergyTransferMode: string
{
	case DC = 'DC';
	case ACsinglephase = 'AC_single_phase';
	case ACtwophase = 'AC_two_phase';
	case ACthreephase = 'AC_three_phase';
}
