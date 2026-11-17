<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the GridEventFault field of a value in NotifyDERAlarmRequest.
 */
enum GridEventFault: string
{
	case CurrentImbalance = 'CurrentImbalance';
	case LocalEmergency = 'LocalEmergency';
	case LowInputPower = 'LowInputPower';
	case OverCurrent = 'OverCurrent';
	case OverFrequency = 'OverFrequency';
	case OverVoltage = 'OverVoltage';
	case PhaseRotation = 'PhaseRotation';
	case RemoteEmergency = 'RemoteEmergency';
	case UnderFrequency = 'UnderFrequency';
	case UnderVoltage = 'UnderVoltage';
	case VoltageImbalance = 'VoltageImbalance';
}
