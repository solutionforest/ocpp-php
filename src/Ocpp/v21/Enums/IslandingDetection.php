<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the IslandingDetection field of a value in NotifyEVChargingNeedsRequest.
 */
enum IslandingDetection: string
{
	case NoAntiIslandingSupport = 'NoAntiIslandingSupport';
	case RoCoF = 'RoCoF';
	case UVPOVP = 'UVP_OVP';
	case UFPOFP = 'UFP_OFP';
	case VoltageVectorShift = 'VoltageVectorShift';
	case ZeroCrossingDetection = 'ZeroCrossingDetection';
	case OtherPassive = 'OtherPassive';
	case ImpedanceMeasurement = 'ImpedanceMeasurement';
	case ImpedanceAtFrequency = 'ImpedanceAtFrequency';
	case SlipModeFrequencyShift = 'SlipModeFrequencyShift';
	case SandiaFrequencyShift = 'SandiaFrequencyShift';
	case SandiaVoltageShift = 'SandiaVoltageShift';
	case FrequencyJump = 'FrequencyJump';
	case RCLQFactor = 'RCLQFactor';
	case OtherActive = 'OtherActive';
}
