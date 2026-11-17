<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Enums;

/**
 * Values of the ConfigurationStatus field of a value in ChangeConfigurationResponse.
 */
enum ConfigurationStatus: string
{
	case Accepted = 'Accepted';
	case Rejected = 'Rejected';
	case RebootRequired = 'RebootRequired';
	case NotSupported = 'NotSupported';
}
