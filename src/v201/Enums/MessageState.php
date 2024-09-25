<?php

namespace SolutionForest\OocpPhp\Enums;

/**
 * Values of the MessageState field of a value in GetDisplayMessagesRequest , NotifyDisplayMessagesRequest , SetDisplayMessageRequest.
 */
enum MessageState: string
{
	case Charging = 'Charging';
	case Faulted = 'Faulted';
	case Idle = 'Idle';
	case Unavailable = 'Unavailable';
}
