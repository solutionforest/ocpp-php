<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;

class ACChargingParametersType extends Datatype
{
	/**
	 * Amount of energy requested (in Wh). This includes energy required for preconditioning.
	 * Relates to: +
	 * *ISO 15118-2*: AC_EVChargeParameterType: EAmount +
	 * *ISO 15118-20*: Dynamic/Scheduled_SEReqControlModeType: EVTargetEnergyRequest
	 */
	public float $energyAmount;

	/**
	 * Minimum current (amps) supported by the electric vehicle (per phase).
	 * Relates to: +
	 * *ISO 15118-2*: AC_EVChargeParameterType: EVMinCurrent
	 */
	public float $evMinCurrent;

	/**
	 * Maximum current (amps) supported by the electric vehicle (per phase). Includes cable capacity.
	 * Relates to: +
	 * *ISO 15118-2*: AC_EVChargeParameterType: EVMaxCurrent
	 */
	public float $evMaxCurrent;

	/**
	 * Maximum voltage supported by the electric vehicle.
	 * Relates to: +
	 * *ISO 15118-2*: AC_EVChargeParameterType: EVMaxVoltage
	 */
	public float $evMaxVoltage;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
