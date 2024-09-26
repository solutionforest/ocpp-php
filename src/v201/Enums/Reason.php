<?php

namespace SolutionForest\OocpPhp\v201\Enums;

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
	case Local = 'Local';
	case LocalOutOfCredit = 'LocalOutOfCredit';
	case MasterPass = 'MasterPass';
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
}
