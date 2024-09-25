<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class MeterValues
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Request_ Body. EVSEID. Numeric_ Identifier
	 * urn:x-enexis:ecdm:uid:1:571101
	 * This contains a number (>0) designating an EVSE of the Charging Station. ‘0’ (zero) is used to designate the main power meter.
	 */
	public int $evseId;
	public array $meterValue;
}
