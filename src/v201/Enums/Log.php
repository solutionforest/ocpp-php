<?php

namespace SolutionForest\OocpPhp\v201\Enums;

/**
 * Values of the Log field of a value in GetLogRequest.
 */
enum Log: string
{
	case DiagnosticsLog = 'DiagnosticsLog';
	case SecurityLog = 'SecurityLog';
}
