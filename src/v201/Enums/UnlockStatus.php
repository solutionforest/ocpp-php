<?php

namespace SolutionForest\OocpPhp\Enums;

/**
 * Values of the UnlockStatus field of a value in UnlockConnectorResponse.
 */
enum UnlockStatus: string
{
	case Unlocked = 'Unlocked';
	case UnlockFailed = 'UnlockFailed';
	case OngoingAuthorizedTransaction = 'OngoingAuthorizedTransaction';
	case UnknownConnector = 'UnknownConnector';
}
