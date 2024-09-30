<?php

namespace SolutionForest\OocpPhp\v201\CallResults;

class GetChargingProfiles
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * This indicates whether the Charging Station is able to process this request and will send <<reportchargingprofilesrequest, ReportChargingProfilesRequest>> messages.
	 */
	public string|\SolutionForest\OocpPhp\v201\Enums\GetChargingProfileStatus $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?array $statusInfo = null;
}
