<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v201\Enums\BootReason;

class BootNotification extends Call
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData;

	/**
	 * Charge_ Point
	 * urn:x-oca:ocpp:uid:2:233122
	 * The physical system where an Electrical Vehicle (EV) can be charged.
	 */
	public object $chargingStation;

	/**
	 * This contains the reason for sending this message to the CSMS.
	 */
	public string|BootReason $reason;
}
