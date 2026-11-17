<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the TriggerReason field of a value in TransactionEventRequest.
 */
enum TriggerReason: string
{
	case AbnormalCondition = 'AbnormalCondition';
	case Authorized = 'Authorized';
	case CablePluggedIn = 'CablePluggedIn';
	case ChargingRateChanged = 'ChargingRateChanged';
	case ChargingStateChanged = 'ChargingStateChanged';
	case CostLimitReached = 'CostLimitReached';
	case Deauthorized = 'Deauthorized';
	case EnergyLimitReached = 'EnergyLimitReached';
	case EVCommunicationLost = 'EVCommunicationLost';
	case EVConnectTimeout = 'EVConnectTimeout';
	case EVDeparted = 'EVDeparted';
	case EVDetected = 'EVDetected';
	case LimitSet = 'LimitSet';
	case MeterValueClock = 'MeterValueClock';
	case MeterValuePeriodic = 'MeterValuePeriodic';
	case OperationModeChanged = 'OperationModeChanged';
	case RemoteStart = 'RemoteStart';
	case RemoteStop = 'RemoteStop';
	case ResetCommand = 'ResetCommand';
	case RunningCost = 'RunningCost';
	case SignedDataReceived = 'SignedDataReceived';
	case SoCLimitReached = 'SoCLimitReached';
	case StopAuthorized = 'StopAuthorized';
	case TariffChanged = 'TariffChanged';
	case TariffNotAccepted = 'TariffNotAccepted';
	case TimeLimitReached = 'TimeLimitReached';
	case Trigger = 'Trigger';
	case TxResumed = 'TxResumed';
	case UnlockCommand = 'UnlockCommand';
}
