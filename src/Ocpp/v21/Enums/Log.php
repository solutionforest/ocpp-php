<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the Log field of a value in GetLogRequest.
 */
enum Log: string
{
	case DiagnosticsLog = 'DiagnosticsLog';
	case SecurityLog = 'SecurityLog';
	case DataCollectorLog = 'DataCollectorLog';
}
