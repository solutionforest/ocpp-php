<?php

namespace SolutionForest\OocpPhp\v201\Datatypes;

abstract class ACChargingParametersType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * AC_ Charging_ Parameters. Energy_ Amount. Energy_ Amount
	 * urn:x-oca:ocpp:uid:1:569211
	 * Amount of energy requested (in Wh). This includes energy required for preconditioning.
	 */
	public int $energyAmount;

	/**
	 * AC_ Charging_ Parameters. EV_ Min. Current
	 * urn:x-oca:ocpp:uid:1:569212
	 * Minimum current (amps) supported by the electric vehicle (per phase).
	 */
	public int $evMinCurrent;

	/**
	 * AC_ Charging_ Parameters. EV_ Max. Current
	 * urn:x-oca:ocpp:uid:1:569213
	 * Maximum current (amps) supported by the electric vehicle (per phase). Includes cable capacity.
	 */
	public int $evMaxCurrent;

	/**
	 * AC_ Charging_ Parameters. EV_ Max. Voltage
	 * urn:x-oca:ocpp:uid:1:569214
	 * Maximum voltage supported by the electric vehicle
	 */
	public int $evMaxVoltage;
}
