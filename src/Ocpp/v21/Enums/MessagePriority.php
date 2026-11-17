<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the MessagePriority field of a value in GetDisplayMessagesRequest , NotifyDisplayMessagesRequest , SetDisplayMessageRequest.
 */
enum MessagePriority: string
{
	case AlwaysFront = 'AlwaysFront';
	case InFront = 'InFront';
	case NormalCycle = 'NormalCycle';
}
