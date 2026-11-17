<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

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
