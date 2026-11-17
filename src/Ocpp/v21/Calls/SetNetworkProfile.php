<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\NetworkConnectionProfileType;

class SetNetworkProfile extends Call
{
	/**
	 * Slot in which the configuration should be stored.
	 */
	public int $configurationSlot;

	/**
	 * The NetworkConnectionProfile defines the functional and technical parameters of a communication link.
	 */
	public NetworkConnectionProfileType $connectionData;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
