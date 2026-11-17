<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Enums;

/**
 * Values of the UpdateType field of a value in SendLocalList.
 */
enum UpdateType: string
{
	case Differential = 'Differential';
	case Full = 'Full';
}
