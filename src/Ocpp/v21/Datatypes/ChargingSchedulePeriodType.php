<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Datatype;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\OperationMode;

class ChargingSchedulePeriodType extends Datatype
{
	/**
	 * Start of the period, in seconds from the start of schedule. The value of StartPeriod also defines the stop time of the previous period.
	 */
	public int $startPeriod;

	/**
	 * Optional only when not required by the _operationMode_, as in CentralSetpoint, ExternalSetpoint, ExternalLimits, LocalFrequency,  LocalLoadBalancing. +
	 * Charging rate limit during the schedule period, in the applicable _chargingRateUnit_.
	 * This SHOULD be a non-negative value; a negative value is only supported for backwards compatibility with older systems that use a negative value to specify a discharging limit.
	 * When using _chargingRateUnit_ = `W`, this field represents the sum of the power of all phases, unless values are provided for L2 and L3, in which case this field represents phase L1.
	 */
	public ?float $limit = null;

	/**
	 * *(2.1)* Charging rate limit on phase L2  in the applicable _chargingRateUnit_.
	 */
	public ?float $limit_L2 = null;

	/**
	 * *(2.1)* Charging rate limit on phase L3  in the applicable _chargingRateUnit_.
	 */
	public ?float $limit_L3 = null;

	/**
	 * The number of phases that can be used for charging. +
	 * For a DC EVSE this field should be omitted. +
	 * For an AC EVSE a default value of _numberPhases_ = 3 will be assumed if the field is absent.
	 */
	public ?int $numberPhases = null;

	/**
	 * Values: 1..3, Used if numberPhases=1 and if the EVSE is capable of switching the phase connected to the EV, i.e. ACPhaseSwitchingSupported is defined and true. It’s not allowed unless both conditions above are true. If both conditions are true, and phaseToUse is omitted, the Charging Station / EVSE will make the selection on its own.
	 */
	public ?int $phaseToUse = null;

	/**
	 * *(2.1)* Limit in _chargingRateUnit_ that the EV is allowed to discharge with. Note, these are negative values in order to be consistent with _setpoint_, which can be positive and negative.  +
	 * For AC this field represents the sum of all phases, unless values are provided for L2 and L3, in which case this field represents phase L1.
	 */
	public ?float $dischargeLimit = null;

	/**
	 * *(2.1)* Limit in _chargingRateUnit_ on phase L2 that the EV is allowed to discharge with.
	 */
	public ?float $dischargeLimit_L2 = null;

	/**
	 * *(2.1)* Limit in _chargingRateUnit_ on phase L3 that the EV is allowed to discharge with.
	 */
	public ?float $dischargeLimit_L3 = null;

	/**
	 * *(2.1)* Setpoint in _chargingRateUnit_ that the EV should follow as close as possible. Use negative values for discharging. +
	 * When a limit and/or _dischargeLimit_ are given the overshoot when following _setpoint_ must remain within these values.
	 * This field represents the sum of all phases, unless values are provided for L2 and L3, in which case this field represents phase L1.
	 */
	public ?float $setpoint = null;

	/**
	 * *(2.1)* Setpoint in _chargingRateUnit_ that the EV should follow on phase L2 as close as possible.
	 */
	public ?float $setpoint_L2 = null;

	/**
	 * *(2.1)* Setpoint in _chargingRateUnit_ that the EV should follow on phase L3 as close as possible.
	 */
	public ?float $setpoint_L3 = null;

	/**
	 * *(2.1)* Setpoint for reactive power (or current) in _chargingRateUnit_ that the EV should follow as closely as possible. Positive values for inductive, negative for capacitive reactive power or current.  +
	 * This field represents the sum of all phases, unless values are provided for L2 and L3, in which case this field represents phase L1.
	 */
	public ?float $setpointReactive = null;

	/**
	 * *(2.1)* Setpoint for reactive power (or current) in _chargingRateUnit_ that the EV should follow on phase L2 as closely as possible.
	 */
	public ?float $setpointReactive_L2 = null;

	/**
	 * *(2.1)* Setpoint for reactive power (or current) in _chargingRateUnit_ that the EV should follow on phase L3 as closely as possible.
	 */
	public ?float $setpointReactive_L3 = null;

	/**
	 * *(2.1)* If  true, the EV should attempt to keep the BMS preconditioned for this time interval.
	 */
	public ?bool $preconditioningRequest = null;

	/**
	 * *(2.1)* If true, the EVSE must turn off power electronics/modules associated with this transaction. Default value when absent is false.
	 */
	public ?bool $evseSleep = null;

	/**
	 * *(2.1)* Power value that, when present, is used as a baseline on top of which values from _v2xFreqWattCurve_ and _v2xSignalWattCurve_ are added.
	 */
	public ?float $v2xBaseline = null;

	/**
	 * *(2.1)* Charging operation mode to use during this time interval. When absent defaults to `ChargingOnly`.
	 */
	public null|string|OperationMode $operationMode = null;

	/** @var list<V2XFreqWattPointType>|null */
	#[ListOf(V2XFreqWattPointType::class)]
	public ?array $v2xFreqWattCurve = null;

	/** @var list<V2XSignalWattPointType>|null */
	#[ListOf(V2XSignalWattPointType::class)]
	public ?array $v2xSignalWattCurve = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
