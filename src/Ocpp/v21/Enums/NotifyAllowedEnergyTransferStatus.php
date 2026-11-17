<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the NotifyAllowedEnergyTransferStatus field of a value in NotifyAllowedEnergyTransferResponse.
 */
enum NotifyAllowedEnergyTransferStatus: string
{
	case Accepted = 'Accepted';
	case Rejected = 'Rejected';
}
