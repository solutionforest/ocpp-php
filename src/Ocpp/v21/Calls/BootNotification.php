<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\ChargingStationType;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\BootReason;

class BootNotification extends Call
{
	/**
	 * The physical system where an Electrical Vehicle (EV) can be charged.
	 */
	public ChargingStationType $chargingStation;

	/**
	 * This contains the reason for sending this message to the CSMS.
	 */
	public string|BootReason $reason;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
