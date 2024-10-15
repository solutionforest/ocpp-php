<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Datatypes;

use SolutionForest\OcppPhp\Ocpp\v201\Enums\EnergyTransferMode;

class ChargingNeedsType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * AC_ Charging_ Parameters
	 * urn:x-oca:ocpp:uid:2:233250
	 * EV AC charging parameters.
	 */
	public ?array $acChargingParameters = null;

	/**
	 * DC_ Charging_ Parameters
	 * urn:x-oca:ocpp:uid:2:233251
	 * EV DC charging parameters
	 */
	public ?array $dcChargingParameters = null;

	/**
	 * Charging_ Needs. Requested. Energy_ Transfer_ Mode_ Code
	 * urn:x-oca:ocpp:uid:1:569209
	 * Mode of energy transfer requested by the EV.
	 */
	public string|EnergyTransferMode $requestedEnergyTransfer;

	/**
	 * Charging_ Needs. Departure_ Time. Date_ Time
	 * urn:x-oca:ocpp:uid:1:569223
	 * Estimated departure time of the EV.
	 */
	public ?string $departureTime = null;
}
