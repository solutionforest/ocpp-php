<?php

namespace SolutionForest\OocpPhp\Enums;

/**
 * Values of the ComponentCriterion field of a value in GetReportRequest.
 */
enum ComponentCriterion: string
{
	case Active = 'Active';
	case Available = 'Available';
	case Enabled = 'Enabled';
	case Problem = 'Problem';
}
