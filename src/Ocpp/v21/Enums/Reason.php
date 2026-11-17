<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the Reason field of a value in TransactionEventRequest.
 */
enum Reason: string
{
	case DeAuthorized = 'DeAuthorized';
	case EmergencyStop = 'EmergencyStop';
	case EnergyLimitReached = 'EnergyLimitReached';
	case EVDisconnected = 'EVDisconnected';
	case GroundFault = 'GroundFault';
	case ImmediateReset = 'ImmediateReset';
	case MasterPass = 'MasterPass';
	case Local = 'Local';
	case LocalOutOfCredit = 'LocalOutOfCredit';
	case Other = 'Other';
	case OvercurrentFault = 'OvercurrentFault';
	case PowerLoss = 'PowerLoss';
	case PowerQuality = 'PowerQuality';
	case Reboot = 'Reboot';
	case Remote = 'Remote';
	case SOCLimitReached = 'SOCLimitReached';
	case StoppedByEV = 'StoppedByEV';
	case TimeLimitReached = 'TimeLimitReached';
	case Timeout = 'Timeout';
	case ReqEnergyTransferRejected = 'ReqEnergyTransferRejected';
}
