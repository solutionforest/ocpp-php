<?php

namespace SolutionForest\OocpPhp\Enums;

/**
 * Values of the ConnectorStatus field of a value in StatusNotificationRequest.
 */
enum ConnectorStatus: string
{
	case Available = 'Available';
	case Occupied = 'Occupied';
	case Reserved = 'Reserved';
	case Unavailable = 'Unavailable';
	case Faulted = 'Faulted';
}
