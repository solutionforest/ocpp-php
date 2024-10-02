<?php

namespace SolutionForest\OocpPhp\v201\Datatypes;

use SolutionForest\OocpPhp\v201\Enums\Monitor;
use SolutionForest\OocpPhp\v201\Enums\SetMonitoringStatus;

class SetMonitoringResultType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Id given to the VariableMonitor by the Charging Station. The Id is only returned when status is accepted. Installed VariableMonitors should have unique id's but the id's of removed Installed monitors should have unique id's but the id's of removed monitors MAY be reused.
	 */
	public ?int $id = null;

	/**
	 * Element providing more information about the status.
	 */
	public ?array $statusInfo = null;

	/**
	 * Status is OK if a value could be returned. Otherwise this will indicate the reason why a value could not be returned.
	 */
	public string|SetMonitoringStatus $status;

	/**
	 * The type of this monitor, e.g. a threshold, delta or periodic monitor.
	 */
	public string|Monitor $type;

	/**
	 * A physical or logical component
	 */
	public array $component;

	/**
	 * Reference key to a component-variable.
	 */
	public array $variable;

	/**
	 * The severity that will be assigned to an event that is triggered by this monitor. The severity range is 0-9, with 0 as the highest and 9 as the lowest severity level.
	 *
	 * The severity levels have the following meaning: +
	 * *0-Danger* +
	 * Indicates lives are potentially in danger. Urgent attention is needed and action should be taken immediately. +
	 * *1-Hardware Failure* +
	 * Indicates that the Charging Station is unable to continue regular operations due to Hardware issues. Action is required. +
	 * *2-System Failure* +
	 * Indicates that the Charging Station is unable to continue regular operations due to software or minor hardware issues. Action is required. +
	 * *3-Critical* +
	 * Indicates a critical error. Action is required. +
	 * *4-Error* +
	 * Indicates a non-urgent error. Action is required. +
	 * *5-Alert* +
	 * Indicates an alert event. Default severity for any type of monitoring event.  +
	 * *6-Warning* +
	 * Indicates a warning event. Action may be required. +
	 * *7-Notice* +
	 * Indicates an unusual event. No immediate action is required. +
	 * *8-Informational* +
	 * Indicates a regular operational event. May be used for reporting, measuring throughput, etc. No action is required. +
	 * *9-Debug* +
	 * Indicates information useful to developers for debugging, not useful during operations.
	 */
	public int $severity;
}
