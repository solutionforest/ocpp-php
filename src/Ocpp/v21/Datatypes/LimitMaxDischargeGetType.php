<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;

class LimitMaxDischargeGetType extends Datatype
{
	/**
	 * Id of setting
	 */
	public string $id;

	/**
	 * True if setting is a default control.
	 */
	public bool $isDefault;

	/**
	 * True if this setting is superseded by a higher priority setting (i.e. lower value of _priority_)
	 */
	public bool $isSuperseded;
	public LimitMaxDischargeType $limitMaxDischarge;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
