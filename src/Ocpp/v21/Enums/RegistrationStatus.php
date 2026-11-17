<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the RegistrationStatus field of a value in BootNotificationResponse.
 */
enum RegistrationStatus: string
{
	case Accepted = 'Accepted';
	case Pending = 'Pending';
	case Rejected = 'Rejected';
}
