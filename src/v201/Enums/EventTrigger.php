<?php

namespace SolutionForest\OocpPhp\Enums;

/**
 * Values of the EventTrigger field of a value in NotifyEventRequest.
 */
enum EventTrigger: string
{
	case Alerting = 'Alerting';
	case Delta = 'Delta';
	case Periodic = 'Periodic';
}
