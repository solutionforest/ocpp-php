<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Enums;

/**
 * Values of the UnlockStatus field of a value in UnlockConnectorResponse.
 */
enum UnlockStatus: string
{
	case Unlocked = 'Unlocked';
	case UnlockFailed = 'UnlockFailed';
	case NotSupported = 'NotSupported';
}
