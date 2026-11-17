<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Enums;

/**
 * Values of the ChargePointErrorCode field of a value in StatusNotification.
 */
enum ChargePointErrorCode: string
{
	case ConnectorLockFailure = 'ConnectorLockFailure';
	case EVCommunicationError = 'EVCommunicationError';
	case GroundFailure = 'GroundFailure';
	case HighTemperature = 'HighTemperature';
	case InternalError = 'InternalError';
	case LocalListConflict = 'LocalListConflict';
	case NoError = 'NoError';
	case OtherError = 'OtherError';
	case OverCurrentFailure = 'OverCurrentFailure';
	case PowerMeterFailure = 'PowerMeterFailure';
	case PowerSwitchFailure = 'PowerSwitchFailure';
	case ReaderFailure = 'ReaderFailure';
	case ResetFailure = 'ResetFailure';
	case UnderVoltage = 'UnderVoltage';
	case OverVoltage = 'OverVoltage';
	case WeakSignal = 'WeakSignal';
}
