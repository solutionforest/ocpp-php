<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the OperationMode field of a value in GetCompositeScheduleResponse , NotifyChargingLimitRequest , NotifyEVChargingScheduleRequest , ReportChargingProfilesRequest , RequestStartTransactionRequest , SetChargingProfileRequest , TransactionEventRequest.
 */
enum OperationMode: string
{
	case Idle = 'Idle';
	case ChargingOnly = 'ChargingOnly';
	case CentralSetpoint = 'CentralSetpoint';
	case ExternalSetpoint = 'ExternalSetpoint';
	case ExternalLimits = 'ExternalLimits';
	case CentralFrequency = 'CentralFrequency';
	case LocalFrequency = 'LocalFrequency';
	case LocalLoadBalancing = 'LocalLoadBalancing';
}
