<?php

namespace SolutionForest\OcppPhp\v201\Enums;

/**
 * Values of the MonitoringBase field of a value in SetMonitoringBaseRequest.
 */
enum MonitoringBase: string
{
	case All = 'All';
	case FactoryDefault = 'FactoryDefault';
	case HardWiredOnly = 'HardWiredOnly';
}
