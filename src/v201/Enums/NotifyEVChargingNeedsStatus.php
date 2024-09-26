<?php

namespace SolutionForest\OocpPhp\v201\Enums;

/**
 * Values of the NotifyEVChargingNeedsStatus field of a value in NotifyEVChargingNeedsResponse.
 */
enum NotifyEVChargingNeedsStatus: string
{
	case Accepted = 'Accepted';
	case Rejected = 'Rejected';
	case Processing = 'Processing';
}
