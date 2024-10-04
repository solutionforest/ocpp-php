<?php

namespace SolutionForest\OcppPhp\v201\Enums;

/**
 * Values of the ReportBase field of a value in GetBaseReportRequest.
 */
enum ReportBase: string
{
	case ConfigurationInventory = 'ConfigurationInventory';
	case FullInventory = 'FullInventory';
	case SummaryInventory = 'SummaryInventory';
}
