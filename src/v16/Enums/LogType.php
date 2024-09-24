<?php

namespace SolutionForest\OcppPhp\Enums;

/**
 * Values of the LogType field of a value in GetLog.
 */
enum LogType
{
	case DiagnosticsLog;
	case SecurityLog;
}
