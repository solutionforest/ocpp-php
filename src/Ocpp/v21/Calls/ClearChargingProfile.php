<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\ClearChargingProfileType;

class ClearChargingProfile extends Call
{
	/**
	 * The Id of the charging profile to clear.
	 */
	public ?int $chargingProfileId = null;

	/**
	 * A ClearChargingProfileType is a filter for charging profiles to be cleared by ClearChargingProfileRequest.
	 */
	public ?ClearChargingProfileType $chargingProfileCriteria = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
