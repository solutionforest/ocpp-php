<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Enums;

/**
 * Values of the UnitOfMeasure field of a value in MeterValues , StopTransaction.
 */
enum UnitOfMeasure: string
{
	case Wh = 'Wh';
	case kWh = 'kWh';
	case varh = 'varh';
	case kvarh = 'kvarh';
	case W = 'W';
	case kW = 'kW';
	case VA = 'VA';
	case kVA = 'kVA';
	case var = 'var';
	case kvar = 'kvar';
	case A = 'A';
	case V = 'V';
	case K = 'K';
	case Celcius = 'Celcius';
	case Celsius = 'Celsius';
	case Fahrenheit = 'Fahrenheit';
	case Percent = 'Percent';
	case Hertz = 'Hertz';
}
