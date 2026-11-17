<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the MessageState field of a value in GetDisplayMessagesRequest , NotifyDisplayMessagesRequest , SetDisplayMessageRequest.
 */
enum MessageState: string
{
	case Charging = 'Charging';
	case Faulted = 'Faulted';
	case Idle = 'Idle';
	case Unavailable = 'Unavailable';
	case Suspended = 'Suspended';
	case Discharging = 'Discharging';
}
