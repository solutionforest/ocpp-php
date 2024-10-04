<?php

namespace SolutionForest\OcppPhp\v201\Enums;

/**
 * Values of the TriggerReason field of a value in TransactionEventRequest.
 */
enum TriggerReason: string
{
	case Authorized = 'Authorized';
	case CablePluggedIn = 'CablePluggedIn';
	case ChargingRateChanged = 'ChargingRateChanged';
	case ChargingStateChanged = 'ChargingStateChanged';
	case Deauthorized = 'Deauthorized';
	case EnergyLimitReached = 'EnergyLimitReached';
	case EVCommunicationLost = 'EVCommunicationLost';
	case EVConnectTimeout = 'EVConnectTimeout';
	case MeterValueClock = 'MeterValueClock';
	case MeterValuePeriodic = 'MeterValuePeriodic';
	case TimeLimitReached = 'TimeLimitReached';
	case Trigger = 'Trigger';
	case UnlockCommand = 'UnlockCommand';
	case StopAuthorized = 'StopAuthorized';
	case EVDeparted = 'EVDeparted';
	case EVDetected = 'EVDetected';
	case RemoteStop = 'RemoteStop';
	case RemoteStart = 'RemoteStart';
	case AbnormalCondition = 'AbnormalCondition';
	case SignedDataReceived = 'SignedDataReceived';
	case ResetCommand = 'ResetCommand';
}
