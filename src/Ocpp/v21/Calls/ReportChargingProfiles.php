<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Calls;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\ChargingProfileType;

class ReportChargingProfiles extends Call
{
	/**
	 * Id used to match the <<getchargingprofilesrequest, GetChargingProfilesRequest>> message with the resulting ReportChargingProfilesRequest messages. When the CSMS provided a requestId in the <<getchargingprofilesrequest, GetChargingProfilesRequest>>, this field SHALL contain the same value.
	 */
	public int $requestId;

	/**
	 * Source that has installed this charging profile. Values defined in Appendix as ChargingLimitSourceEnumStringType.
	 */
	public string $chargingLimitSource;

	/** @var list<ChargingProfileType> */
	#[ListOf(ChargingProfileType::class)]
	public array $chargingProfile;

	/**
	 * To Be Continued. Default value when omitted: false. false indicates that there are no further messages as part of this report.
	 */
	public ?bool $tbc = null;

	/**
	 * The evse to which the charging profile applies. If evseId = 0, the message contains an overall limit for the Charging Station.
	 */
	public int $evseId;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
