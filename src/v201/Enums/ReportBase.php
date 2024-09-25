<?php

namespace SolutionForest\OocpPhp\Enums;

/**
 * Values of the ReportBase field of a value in GetBaseReportRequest.
 */
enum ReportBase: string
{
	case ConfigurationInventory = 'ConfigurationInventory';
	case FullInventory = 'FullInventory';
	case SummaryInventory = 'SummaryInventory';
}
