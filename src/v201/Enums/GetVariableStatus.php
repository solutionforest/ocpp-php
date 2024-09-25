<?php

namespace SolutionForest\OocpPhp\Enums;

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
