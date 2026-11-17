<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;

class PriceRuleType extends Datatype
{
	/**
	 * The duration of the parking fee period (in seconds).
	 * When the time enters into a ParkingFeePeriod, the ParkingFee will apply to the session. .
	 */
	public ?int $parkingFeePeriod = null;

	/**
	 * Number of grams of CO2 per kWh.
	 */
	public ?int $carbonDioxideEmission = null;

	/**
	 * Percentage of the power that is created by renewable resources.
	 */
	public ?int $renewableGenerationPercentage = null;

	/**
	 * Part of ISO 15118-20 price schedule.
	 */
	public RationalNumberType $energyFee;

	/**
	 * Part of ISO 15118-20 price schedule.
	 */
	public ?RationalNumberType $parkingFee = null;

	/**
	 * Part of ISO 15118-20 price schedule.
	 */
	public RationalNumberType $powerRangeStart;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
