<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;

class DCChargingParametersType extends Datatype
{
	/**
	 * Maximum current (in A) supported by the electric vehicle. Includes cable capacity.
	 * Relates to: +
	 * *ISO 15118-2*: DC_EVChargeParameterType:EVMaximumCurrentLimit
	 */
	public float $evMaxCurrent;

	/**
	 * Maximum voltage supported by the electric vehicle.
	 * Relates to: +
	 * *ISO 15118-2*: DC_EVChargeParameterType: EVMaximumVoltageLimit
	 */
	public float $evMaxVoltage;

	/**
	 * Maximum power (in W) supported by the electric vehicle. Required for DC charging.
	 * Relates to: +
	 * *ISO 15118-2*: DC_EVChargeParameterType: EVMaximumPowerLimit
	 */
	public ?float $evMaxPower = null;

	/**
	 * Capacity of the electric vehicle battery (in Wh).
	 * Relates to: +
	 * *ISO 15118-2*: DC_EVChargeParameterType: EVEnergyCapacity
	 */
	public ?float $evEnergyCapacity = null;

	/**
	 * Amount of energy requested (in Wh). This inludes energy required for preconditioning.
	 * Relates to: +
	 * *ISO 15118-2*: DC_EVChargeParameterType: EVEnergyRequest
	 */
	public ?float $energyAmount = null;

	/**
	 * Energy available in the battery (in percent of the battery capacity)
	 * Relates to: +
	 * *ISO 15118-2*: DC_EVChargeParameterType: DC_EVStatus: EVRESSSOC
	 */
	public ?int $stateOfCharge = null;

	/**
	 * Percentage of SoC at which the EV considers the battery fully charged. (possible values: 0 - 100)
	 * Relates to: +
	 * *ISO 15118-2*: DC_EVChargeParameterType: FullSOC
	 */
	public ?int $fullSoC = null;

	/**
	 * Percentage of SoC at which the EV considers a fast charging process to end. (possible values: 0 - 100)
	 * Relates to: +
	 * *ISO 15118-2*: DC_EVChargeParameterType: BulkSOC
	 */
	public ?int $bulkSoC = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
