<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\DERControl;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\GridEventFault;

class NotifyDERAlarm extends Call
{
	/**
	 * Name of DER control, e.g. LFMustTrip
	 */
	public string|DERControl $controlType;

	/**
	 * Type of grid event that caused this
	 */
	public null|string|GridEventFault $gridEventFault = null;

	/**
	 * True when error condition has ended.
	 * Absent or false when alarm has started.
	 */
	public ?bool $alarmEnded = null;

	/**
	 * Time of start or end of alarm.
	 */
	public string $timestamp;

	/**
	 * Optional info provided by EV.
	 */
	public ?string $extraInfo = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
