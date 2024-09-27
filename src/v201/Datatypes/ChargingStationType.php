<?php

namespace SolutionForest\OocpPhp\v201\Datatypes;

abstract class ChargingStationType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Device. Serial_ Number. Serial_ Number
	 * urn:x-oca:ocpp:uid:1:569324
	 * Vendor-specific device identifier.
	 */
	public ?string $serialNumber = null;

	/**
	 * Device. Model. CI20_ Text
	 * urn:x-oca:ocpp:uid:1:569325
	 * Defines the model of the device.
	 */
	public string $model;

	/**
	 * Wireless_ Communication_ Module
	 * urn:x-oca:ocpp:uid:2:233306
	 * Defines parameters required for initiating and maintaining wireless communication with other devices.
	 */
	public ?array $modem = null;

	/**
	 * Identifies the vendor (not necessarily in a unique manner).
	 */
	public string $vendorName;

	/**
	 * This contains the firmware version of the Charging Station.
	 */
	public ?string $firmwareVersion = null;
}
