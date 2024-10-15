<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Enums;

/**
 * Values of the Connector field of a value in ReserveNowRequest.
 */
enum Connector: string
{
	case cCCS1 = 'cCCS1';
	case cCCS2 = 'cCCS2';
	case cG105 = 'cG105';
	case cTesla = 'cTesla';
	case cType1 = 'cType1';
	case cType2 = 'cType2';
	case s3091P16A = 's309-1P-16A';
	case s3091P32A = 's309-1P-32A';
	case s3093P16A = 's309-3P-16A';
	case s3093P32A = 's309-3P-32A';
	case sBS1361 = 'sBS1361';
	case sCEE77 = 'sCEE-7-7';
	case sType2 = 'sType2';
	case sType3 = 'sType3';
	case Other1PhMax16A = 'Other1PhMax16A';
	case Other1PhOver16A = 'Other1PhOver16A';
	case Other3Ph = 'Other3Ph';
	case Pan = 'Pan';
	case wInductive = 'wInductive';
	case wResonant = 'wResonant';
	case Undetermined = 'Undetermined';
	case Unknown = 'Unknown';
}
