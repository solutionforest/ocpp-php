<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;

class BatteryDataType extends Datatype
{
	/**
	 * Slot number where battery is inserted or removed.
	 */
	public int $evseId;

	/**
	 * Serial number of battery.
	 */
	public string $serialNumber;

	/**
	 * State of charge
	 */
	public float $soC;

	/**
	 * State of health
	 */
	public float $soH;

	/**
	 * Production date of battery.
	 */
	public ?string $productionDate = null;

	/**
	 * Vendor-specific info from battery in undefined format.
	 */
	public ?string $vendorInfo = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
