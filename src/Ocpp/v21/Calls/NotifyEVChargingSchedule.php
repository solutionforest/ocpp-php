<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\ChargingScheduleType;

class NotifyEVChargingSchedule extends Call
{
	/**
	 * Periods contained in the charging profile are relative to this point in time.
	 */
	public string $timeBase;

	/**
	 * Charging schedule structure defines a list of charging periods, as used in: NotifyEVChargingScheduleRequest and ChargingProfileType. When used in a NotifyEVChargingScheduleRequest only _duration_ and _chargingSchedulePeriod_ are relevant and _chargingRateUnit_ must be 'W'. +
	 * An ISO 15118-20 session may provide either an _absolutePriceSchedule_ or a _priceLevelSchedule_. An ISO 15118-2 session can only provide a_salesTariff_ element. The field _digestValue_ is used when price schedule or sales tariff are signed.
	 *
	 * image::images/ChargingSchedule-Simple.png[]
	 */
	public ChargingScheduleType $chargingSchedule;

	/**
	 * The charging schedule contained in this notification applies to an EVSE. EvseId must be > 0.
	 */
	public int $evseId;

	/**
	 * *(2.1)* Id  of the _chargingSchedule_ that EV selected from the provided ChargingProfile.
	 */
	public ?int $selectedChargingScheduleId = null;

	/**
	 * *(2.1)* True when power tolerance is accepted by EV.
	 * This value is taken from EVPowerProfile.PowerToleranceAcceptance in the ISO 15118-20 PowerDeliverReq message..
	 */
	public ?bool $powerToleranceAcceptance = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
