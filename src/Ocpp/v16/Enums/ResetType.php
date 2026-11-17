<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Enums;

/**
 * Values of the ResetType field of a value in Reset.
 */
enum ResetType: string
{
	case Hard = 'Hard';
	case Soft = 'Soft';
}
