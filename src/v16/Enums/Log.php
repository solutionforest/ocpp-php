<?php

namespace SolutionForest\OcppPhp\v16\Enums;

/**
 * Values of the Log field of a value in GetLog.
 */
enum Log: string
{
	case DiagnosticsLog = 'DiagnosticsLog';
	case SecurityLog = 'SecurityLog';
}
