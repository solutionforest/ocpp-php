<?php

namespace SolutionForest\OcppPhp\v201\Datatypes;

class EVSEType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Identified_ Object. MRID. Numeric_ Identifier
	 * urn:x-enexis:ecdm:uid:1:569198
	 * EVSE Identifier. This contains a number (> 0) designating an EVSE of the Charging Station.
	 */
	public int $id;

	/**
	 * An id to designate a specific connector (on an EVSE) by connector index number.
	 */
	public ?int $connectorId = null;
}
