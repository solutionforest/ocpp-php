<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\ChargingNeedsType;

class NotifyEVChargingNeeds extends Call
{
	/**
	 * Defines the EVSE and connector to which the EV is connected. EvseId may not be 0.
	 */
	public int $evseId;

	/**
	 * Contains the maximum elements the EV supports for: +
	 * - ISO 15118-2: schedule tuples in SASchedule (both Pmax and Tariff). +
	 * - ISO 15118-20: PowerScheduleEntry, PriceRule and PriceLevelScheduleEntries.
	 */
	public ?int $maxScheduleTuples = null;
	public ChargingNeedsType $chargingNeeds;

	/**
	 * *(2.1)* Time when EV charging needs were received. +
	 * Field can be added when charging station was offline when charging needs were received.
	 */
	public ?string $timestamp = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
