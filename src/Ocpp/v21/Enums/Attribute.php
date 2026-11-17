<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the Attribute field of a value in GetVariablesRequest , GetVariablesResponse , NotifyReportRequest , SetVariablesRequest , SetVariablesResponse.
 */
enum Attribute: string
{
	case Actual = 'Actual';
	case Target = 'Target';
	case MinSet = 'MinSet';
	case MaxSet = 'MaxSet';
}
