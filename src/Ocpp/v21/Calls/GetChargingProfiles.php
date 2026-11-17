<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\ChargingProfileCriterionType;

class GetChargingProfiles extends Call
{
	/**
	 * Reference identification that is to be used by the Charging Station in the <<reportchargingprofilesrequest, ReportChargingProfilesRequest>> when provided.
	 */
	public int $requestId;

	/**
	 * For which EVSE installed charging profiles SHALL be reported. If 0, only charging profiles installed on the Charging Station itself (the grid connection) SHALL be reported. If omitted, all installed charging profiles SHALL be reported. +
	 * Reported charging profiles SHALL match the criteria in field _chargingProfile_.
	 */
	public ?int $evseId = null;

	/**
	 * A ChargingProfileCriterionType is a filter for charging profiles to be selected by a GetChargingProfilesRequest.
	 */
	public ChargingProfileCriterionType $chargingProfile;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
