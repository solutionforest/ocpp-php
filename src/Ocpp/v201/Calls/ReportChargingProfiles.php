<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v201\Enums\ChargingLimitSource;

class ReportChargingProfiles extends Call
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData;

	/**
	 * Id used to match the <<getchargingprofilesrequest, GetChargingProfilesRequest>> message with the resulting ReportChargingProfilesRequest messages. When the CSMS provided a requestId in the <<getchargingprofilesrequest, GetChargingProfilesRequest>>, this field SHALL contain the same value.
	 */
	public int $requestId;

	/**
	 * Source that has installed this charging profile.
	 */
	public string|ChargingLimitSource $chargingLimitSource;
	public array $chargingProfile;

	/**
	 * To Be Continued. Default value when omitted: false. false indicates that there are no further messages as part of this report.
	 */
	public ?bool $tbc;

	/**
	 * The evse to which the charging profile applies. If evseId = 0, the message contains an overall limit for the Charging Station.
	 */
	public int $evseId;
}
