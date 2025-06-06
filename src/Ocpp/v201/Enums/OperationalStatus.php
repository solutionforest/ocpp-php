<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Enums;

/**
 * Values of the OperationalStatus field of a value in ChangeAvailabilityRequest.
 */
enum OperationalStatus: string
{
	case Inoperative = 'Inoperative';
	case Operative = 'Operative';
}
