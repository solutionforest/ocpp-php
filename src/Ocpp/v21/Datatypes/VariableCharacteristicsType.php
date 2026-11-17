<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\Data;

class VariableCharacteristicsType extends Datatype
{
	/**
	 * Unit of the variable. When the transmitted value has a unit, this field SHALL be included.
	 */
	public ?string $unit = null;

	/**
	 * Data type of this variable.
	 */
	public string|Data $dataType;

	/**
	 * Minimum possible value of this variable.
	 */
	public ?float $minLimit = null;

	/**
	 * Maximum possible value of this variable. When the datatype of this Variable is String, OptionList, SequenceList or MemberList, this field defines the maximum length of the (CSV) string.
	 */
	public ?float $maxLimit = null;

	/**
	 * *(2.1)* Maximum number of elements from _valuesList_ that are supported as _attributeValue_.
	 */
	public ?int $maxElements = null;

	/**
	 * Mandatory when _dataType_ = OptionList, MemberList or SequenceList. In that case _valuesList_ specifies the allowed values for the type.
	 *
	 * The length of this field can be limited by DeviceDataCtrlr.ConfigurationValueSize.
	 *
	 * * OptionList: The (Actual) Variable value must be a single value from the reported (CSV) enumeration list.
	 *
	 * * MemberList: The (Actual) Variable value  may be an (unordered) (sub-)set of the reported (CSV) valid values list.
	 *
	 * * SequenceList: The (Actual) Variable value  may be an ordered (priority, etc)  (sub-)set of the reported (CSV) valid values.
	 *
	 * This is a comma separated list.
	 *
	 * The Configuration Variable <<configkey-configuration-value-size,ConfigurationValueSize>> can be used to limit SetVariableData.attributeValue and VariableCharacteristics.valuesList. The max size of these values will always remain equal.
	 */
	public ?string $valuesList = null;

	/**
	 * Flag indicating if this variable supports monitoring.
	 */
	public bool $supportsMonitoring;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
