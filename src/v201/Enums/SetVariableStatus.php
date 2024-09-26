<?php

namespace SolutionForest\OocpPhp\v201\Enums;

/**
 * Values of the SetVariableStatus field of a value in SetVariablesResponse.
 */
enum SetVariableStatus: string
{
	case Accepted = 'Accepted';
	case Rejected = 'Rejected';
	case UnknownComponent = 'UnknownComponent';
	case UnknownVariable = 'UnknownVariable';
	case NotSupportedAttributeType = 'NotSupportedAttributeType';
	case RebootRequired = 'RebootRequired';
}
