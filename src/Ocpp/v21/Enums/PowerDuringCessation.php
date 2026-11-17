<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the PowerDuringCessation field of a value in ReportDERControlRequest , SetDERControlRequest.
 */
enum PowerDuringCessation: string
{
	case Active = 'Active';
	case Reactive = 'Reactive';
}
