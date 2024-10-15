<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Enums;

/**
 * Values of the GetVariableStatus field of a value in GetVariablesResponse.
 */
enum GetVariableStatus: string
{
	case Accepted = 'Accepted';
	case Rejected = 'Rejected';
	case UnknownComponent = 'UnknownComponent';
	case UnknownVariable = 'UnknownVariable';
	case NotSupportedAttributeType = 'NotSupportedAttributeType';
}
