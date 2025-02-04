<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Enums;

/**
 * Values of the Reset field of a value in ResetRequest.
 */
enum Reset: string
{
	case Immediate = 'Immediate';
	case OnIdle = 'OnIdle';
}
