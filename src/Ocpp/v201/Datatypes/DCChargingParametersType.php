<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Datatypes;

class DCChargingParametersType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * DC_ Charging_ Parameters. EV_ Max. Current
	 * urn:x-oca:ocpp:uid:1:569215
	 * Maximum current (amps) supported by the electric vehicle. Includes cable capacity.
	 */
	public int $evMaxCurrent;

	/**
	 * DC_ Charging_ Parameters. EV_ Max. Voltage
	 * urn:x-oca:ocpp:uid:1:569216
	 * Maximum voltage supported by the electric vehicle
	 */
	public int $evMaxVoltage;

	/**
	 * DC_ Charging_ Parameters. Energy_ Amount. Energy_ Amount
	 * urn:x-oca:ocpp:uid:1:569217
	 * Amount of energy requested (in Wh). This inludes energy required for preconditioning.
	 */
	public ?int $energyAmount = null;

	/**
	 * DC_ Charging_ Parameters. EV_ Max. Power
	 * urn:x-oca:ocpp:uid:1:569218
	 * Maximum power (in W) supported by the electric vehicle. Required for DC charging.
	 */
	public ?int $evMaxPower = null;

	/**
	 * DC_ Charging_ Parameters. State_ Of_ Charge. Numeric
	 * urn:x-oca:ocpp:uid:1:569219
	 * Energy available in the battery (in percent of the battery capacity)
	 */
	public ?int $stateOfCharge = null;

	/**
	 * DC_ Charging_ Parameters. EV_ Energy_ Capacity. Numeric
	 * urn:x-oca:ocpp:uid:1:569220
	 * Capacity of the electric vehicle battery (in Wh)
	 */
	public ?int $evEnergyCapacity = null;

	/**
	 * DC_ Charging_ Parameters. Full_ SOC. Percentage
	 * urn:x-oca:ocpp:uid:1:569221
	 * Percentage of SoC at which the EV considers the battery fully charged. (possible values: 0 - 100)
	 */
	public ?int $fullSoC = null;

	/**
	 * DC_ Charging_ Parameters. Bulk_ SOC. Percentage
	 * urn:x-oca:ocpp:uid:1:569222
	 * Percentage of SoC at which the EV considers a fast charging process to end. (possible values: 0 - 100)
	 */
	public ?int $bulkSoC = null;
}
