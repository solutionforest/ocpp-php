<?php

namespace SolutionForest\OcppPhp\v201\Datatypes;

use SolutionForest\OcppPhp\v201\Enums\Data;

class VariableCharacteristicsType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

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
	public ?int $minLimit = null;

	/**
	 * Maximum possible value of this variable. When the datatype of this Variable is String, OptionList, SequenceList or MemberList, this field defines the maximum length of the (CSV) string.
	 */
	public ?int $maxLimit = null;

	/**
	 * Allowed values when variable is Option/Member/SequenceList.
	 *
	 * * OptionList: The (Actual) Variable value must be a single value from the reported (CSV) enumeration list.
	 *
	 * * MemberList: The (Actual) Variable value  may be an (unordered) (sub-)set of the reported (CSV) valid values list.
	 *
	 * * SequenceList: The (Actual) Variable value  may be an ordered (priority, etc)  (sub-)set of the reported (CSV) valid values.
	 *
	 * This is a comma separated list.
	 *
	 * The Configuration Variable <<configkey-configuration-value-size,ConfigurationValueSize>> can be used to limit SetVariableData.attributeValue and VariableCharacteristics.valueList. The max size of these values will always remain equal.
	 */
	public ?string $valuesList = null;

	/**
	 * Flag indicating if this variable supports monitoring.
	 */
	public bool $supportsMonitoring;
}
