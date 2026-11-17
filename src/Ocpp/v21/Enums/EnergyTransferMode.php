<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the EnergyTransferMode field of a value in AuthorizeResponse , NotifyAllowedEnergyTransferRequest , NotifyEVChargingNeedsRequest.
 */
enum EnergyTransferMode: string
{
	case ACsinglephase = 'AC_single_phase';
	case ACtwophase = 'AC_two_phase';
	case ACthreephase = 'AC_three_phase';
	case DC = 'DC';
	case ACBPT = 'AC_BPT';
	case ACBPTDER = 'AC_BPT_DER';
	case ACDER = 'AC_DER';
	case DCBPT = 'DC_BPT';
	case DCACDP = 'DC_ACDP';
	case DCACDPBPT = 'DC_ACDP_BPT';
	case WPT = 'WPT';
}
