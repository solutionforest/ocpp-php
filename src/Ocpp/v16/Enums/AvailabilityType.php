<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Enums;

/**
 * Values of the AvailabilityType field of a value in ChangeAvailability.
 */
enum AvailabilityType: string
{
	case Inoperative = 'Inoperative';
	case Operative = 'Operative';
}
