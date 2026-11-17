<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\EventNotification;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\EventTrigger;

class EventDataType extends Datatype
{
	/**
	 * Identifies the event. This field can be referred to as a cause by other events.
	 */
	public int $eventId;

	/**
	 * Timestamp of the moment the report was generated.
	 */
	public string $timestamp;

	/**
	 * Type of trigger for this event, e.g. exceeding a threshold value.
	 */
	public string|EventTrigger $trigger;

	/**
	 * Refers to the Id of an event that is considered to be the cause for this event.
	 */
	public ?int $cause = null;

	/**
	 * Actual value (_attributeType_ Actual) of the variable.
	 *
	 * The Configuration Variable <<configkey-reporting-value-size,ReportingValueSize>> can be used to limit GetVariableResult.attributeValue, VariableAttribute.value and EventData.actualValue. The max size of these values will always remain equal.
	 */
	public string $actualValue;

	/**
	 * Technical (error) code as reported by component.
	 */
	public ?string $techCode = null;

	/**
	 * Technical detail information as reported by component.
	 */
	public ?string $techInfo = null;

	/**
	 * _Cleared_ is set to true to report the clearing of a monitored situation, i.e. a 'return to normal'.
	 */
	public ?bool $cleared = null;

	/**
	 * If an event notification is linked to a specific transaction, this field can be used to specify its transactionId.
	 */
	public ?string $transactionId = null;

	/**
	 * A physical or logical component
	 */
	public ComponentType $component;

	/**
	 * Identifies the VariableMonitoring which triggered the event.
	 */
	public ?int $variableMonitoringId = null;

	/**
	 * Specifies the event notification type of the message.
	 */
	public string|EventNotification $eventNotificationType;

	/**
	 * Reference key to a component-variable.
	 */
	public VariableType $variable;

	/**
	 * *(2.1)* Severity associated with the monitor in _variableMonitoringId_ or with the hardwired notification.
	 */
	public ?int $severity = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
