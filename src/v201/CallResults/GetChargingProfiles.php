<?php

namespace SolutionForest\OcppPhp\v201\CallResults;

use SolutionForest\OcppPhp\Messages\CallResult;
use SolutionForest\OcppPhp\v201\Enums\GetChargingProfileStatus;

class GetChargingProfiles extends CallResult
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData;

	/**
	 * This indicates whether the Charging Station is able to process this request and will send <<reportchargingprofilesrequest, ReportChargingProfilesRequest>> messages.
	 */
	public string|GetChargingProfileStatus $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?object $statusInfo;
}
