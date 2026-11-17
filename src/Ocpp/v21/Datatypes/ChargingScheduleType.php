<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Datatype;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\ChargingRateUnit;

class ChargingScheduleType extends Datatype
{
	public int $id;
	public ?LimitAtSoCType $limitAtSoC = null;

	/**
	 * Starting point of an absolute schedule or recurring schedule.
	 */
	public ?string $startSchedule = null;

	/**
	 * Duration of the charging schedule in seconds. If the duration is left empty, the last period will continue indefinitely or until end of the transaction in case startSchedule is absent.
	 */
	public ?int $duration = null;

	/**
	 * The unit of measure in which limits and setpoints are expressed.
	 */
	public string|ChargingRateUnit $chargingRateUnit;

	/**
	 * Minimum charging rate supported by the EV. The unit of measure is defined by the chargingRateUnit. This parameter is intended to be used by a local smart charging algorithm to optimize the power allocation for in the case a charging process is inefficient at lower charging rates.
	 */
	public ?float $minChargingRate = null;

	/**
	 * *(2.1)* Power tolerance when following EVPowerProfile.
	 */
	public ?float $powerTolerance = null;

	/**
	 * *(2.1)* Id of this element for referencing in a signature.
	 */
	public ?int $signatureId = null;

	/**
	 * *(2.1)* Base64 encoded hash (SHA256 for ISO 15118-2, SHA512 for ISO 15118-20) of the EXI price schedule element. Used in signature.
	 */
	public ?string $digestValue = null;

	/**
	 * *(2.1)* Defaults to false. When true, disregard time zone offset in dateTime fields of  _ChargingScheduleType_ and use unqualified local time at Charging Station instead.
	 *  This allows the same `Absolute` or `Recurring` charging profile to be used in both summer and winter time.
	 */
	public ?bool $useLocalTime = null;

	/** @var list<ChargingSchedulePeriodType> */
	#[ListOf(ChargingSchedulePeriodType::class)]
	public array $chargingSchedulePeriod;

	/**
	 * *(2.1)* Defaults to 0. When _randomizedDelay_ not equals zero, then the start of each <<cmn_chargingscheduleperiodtype,ChargingSchedulePeriodType>> is delayed by a randomly chosen number of seconds between 0 and _randomizedDelay_.  Only allowed for TxProfile and TxDefaultProfile.
	 */
	public ?int $randomizedDelay = null;

	/**
	 * A SalesTariff provided by a Mobility Operator (EMSP) .
	 * NOTE: This dataType is based on dataTypes from <<ref-ISOIEC15118-2,ISO 15118-2>>.
	 */
	public ?SalesTariffType $salesTariff = null;

	/**
	 * The AbsolutePriceScheduleType is modeled after the same type that is defined in ISO 15118-20, such that if it is supplied by an EMSP as a signed EXI message, the conversion from EXI to JSON (in OCPP) and back to EXI (for ISO 15118-20) does not change the digest and therefore does not invalidate the signature.
	 *
	 * image::images/AbsolutePriceSchedule-Simple.png[]
	 */
	public ?AbsolutePriceScheduleType $absolutePriceSchedule = null;

	/**
	 * The PriceLevelScheduleType is modeled after the same type that is defined in ISO 15118-20, such that if it is supplied by an EMSP as a signed EXI message, the conversion from EXI to JSON (in OCPP) and back to EXI (for ISO 15118-20) does not change the digest and therefore does not invalidate the signature.
	 */
	public ?PriceLevelScheduleType $priceLevelSchedule = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
