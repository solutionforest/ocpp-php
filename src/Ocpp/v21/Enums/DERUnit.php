<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the DERUnit field of a value in ReportDERControlRequest , SetDERControlRequest.
 */
enum DERUnit: string
{
	case NotApplicable = 'Not_Applicable';
	case PctMaxW = 'PctMaxW';
	case PctMaxVar = 'PctMaxVar';
	case PctWAvail = 'PctWAvail';
	case PctVarAvail = 'PctVarAvail';
	case PctEffectiveV = 'PctEffectiveV';
}
