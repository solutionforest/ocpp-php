<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;

class EVSEType extends Datatype
{
	/**
	 * EVSE Identifier. This contains a number (> 0) designating an EVSE of the Charging Station.
	 */
	public int $id;

	/**
	 * An id to designate a specific connector (on an EVSE) by connector index number.
	 */
	public ?int $connectorId = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
