<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;

class ChargingStationType extends Datatype
{
	/**
	 * Vendor-specific device identifier.
	 */
	public ?string $serialNumber = null;

	/**
	 * Defines the model of the device.
	 */
	public string $model;

	/**
	 * Defines parameters required for initiating and maintaining wireless communication with other devices.
	 */
	public ?ModemType $modem = null;

	/**
	 * Identifies the vendor (not necessarily in a unique manner).
	 */
	public string $vendorName;

	/**
	 * This contains the firmware version of the Charging Station.
	 */
	public ?string $firmwareVersion = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
