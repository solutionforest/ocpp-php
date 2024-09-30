<?php

namespace SolutionForest\OocpPhp\v201\Datatypes;

class MeterValueType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;
	public array $sampledValue;

	/**
	 * Meter_ Value. Timestamp. Date_ Time
	 * urn:x-oca:ocpp:uid:1:569259
	 * Timestamp for measured value(s).
	 */
	public string $timestamp;
}
