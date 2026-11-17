<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;

class ChargingScheduleUpdateType extends Datatype
{
	/**
	 * Optional only when not required by the _operationMode_, as in CentralSetpoint, ExternalSetpoint, ExternalLimits, LocalFrequency,  LocalLoadBalancing. +
	 * Charging rate limit during the schedule period, in the applicable _chargingRateUnit_.
	 * This SHOULD be a non-negative value; a negative value is only supported for backwards compatibility with older systems that use a negative value to specify a discharging limit.
	 * For AC this field represents the sum of all phases, unless values are provided for L2 and L3, in which case this field represents phase L1.
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

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
