<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;

class ReactivePowerParamsType extends Datatype
{
	/**
	 * Only for VoltVar curve: The nominal ac voltage (rms) adjustment to the voltage curve points for Volt-Var curves (percentage).
	 */
	public ?float $vRef = null;

	/**
	 * Only for VoltVar: Enable/disable autonomous VRef adjustment
	 */
	public ?bool $autonomousVRefEnable = null;

	/**
	 * Only for VoltVar: Adjustment range for VRef time constant
	 */
	public ?float $autonomousVRefTimeConstant = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
