<?php

namespace SolutionForest\OocpPhp\v201\Datatypes;

abstract class EventDataType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Identifies the event. This field can be referred to as a cause by other events.
	 */
	public ?int $eventId = null;

	/**
	 * Timestamp of the moment the report was generated.
	 */
	public ?string $timestamp = null;

	/**
	 * Type of monitor that triggered this event, e.g. exceeding a threshold value.
	 */
	public null|string|\SolutionForest\OocpPhp\v201\Enums\EventTrigger $trigger = null;

	/**
	 * Refers to the Id of an event that is considered to be the cause for this event.
	 */
	public ?int $cause = null;

	/**
	 * Actual value (_attributeType_ Actual) of the variable.
	 *
	 * The Configuration Variable <<configkey-reporting-value-size,ReportingValueSize>> can be used to limit GetVariableResult.attributeValue, VariableAttribute.value and EventData.actualValue. The max size of these values will always remain equal.
	 */
	public ?string $actualValue = null;

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
	public ?array $component = null;

	/**
	 * Identifies the VariableMonitoring which triggered the event.
	 */
	public ?int $variableMonitoringId = null;

	/**
	 * Specifies the event notification type of the message.
	 */
	public null|string|\SolutionForest\OocpPhp\v201\Enums\EventNotification $eventNotificationType = null;

	/**
	 * Reference key to a component-variable.
	 */
	public ?array $variable = null;
}
