<?php

namespace SolutionForest\OocpPhp\v201\Enums;

/**
 * Values of the GenericDeviceModelStatus field of a value in GetBaseReportResponse , GetMonitoringReportResponse , GetReportResponse , SetMonitoringBaseResponse.
 */
enum GenericDeviceModelStatus: string
{
	case Accepted = 'Accepted';
	case Rejected = 'Rejected';
	case NotSupported = 'NotSupported';
	case EmptyResultSet = 'EmptyResultSet';
}
