<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;

class SetNetworkProfile extends Call
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData;

	/**
	 * Slot in which the configuration should be stored.
	 */
	public int $configurationSlot;

	/**
	 * Communication_ Function
	 * urn:x-oca:ocpp:uid:2:233304
	 * The NetworkConnectionProfile defines the functional and technical parameters of a communication link.
	 */
	public object $connectionData;
}
