<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\ChargingProfilePurpose;

class ClearChargingProfileType extends Datatype
{
	/**
	 * Specifies the id of the EVSE for which to clear charging profiles. An evseId of zero (0) specifies the charging profile for the overall Charging Station. Absence of this parameter means the clearing applies to all charging profiles that match the other criteria in the request.
	 */
	public ?int $evseId = null;

	/**
	 * Specifies to purpose of the charging profiles that will be cleared, if they meet the other criteria in the request.
	 */
	public null|string|ChargingProfilePurpose $chargingProfilePurpose = null;

	/**
	 * Specifies the stackLevel for which charging profiles will be cleared, if they meet the other criteria in the request.
	 */
	public ?int $stackLevel = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
