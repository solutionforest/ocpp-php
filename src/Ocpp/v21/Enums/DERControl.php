<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the DERControl field of a value in ClearDERControlRequest , GetDERControlRequest , NotifyDERAlarmRequest , NotifyEVChargingNeedsRequest , ReportDERControlRequest , SetDERControlRequest.
 */
enum DERControl: string
{
	case EnterService = 'EnterService';
	case FreqDroop = 'FreqDroop';
	case FreqWatt = 'FreqWatt';
	case FixedPFAbsorb = 'FixedPFAbsorb';
	case FixedPFInject = 'FixedPFInject';
	case FixedVar = 'FixedVar';
	case Gradients = 'Gradients';
	case HFMustTrip = 'HFMustTrip';
	case HFMayTrip = 'HFMayTrip';
	case HVMustTrip = 'HVMustTrip';
	case HVMomCess = 'HVMomCess';
	case HVMayTrip = 'HVMayTrip';
	case LimitMaxDischarge = 'LimitMaxDischarge';
	case LFMustTrip = 'LFMustTrip';
	case LVMustTrip = 'LVMustTrip';
	case LVMomCess = 'LVMomCess';
	case LVMayTrip = 'LVMayTrip';
	case PowerMonitoringMustTrip = 'PowerMonitoringMustTrip';
	case VoltVar = 'VoltVar';
	case VoltWatt = 'VoltWatt';
	case WattPF = 'WattPF';
	case WattVar = 'WattVar';
}
