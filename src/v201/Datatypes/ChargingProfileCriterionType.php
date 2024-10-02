<?php

namespace SolutionForest\OocpPhp\v201\Datatypes;

use SolutionForest\OocpPhp\v201\Enums\ChargingProfilePurpose;

class ChargingProfileCriterionType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Charging_ Profile. Charging_ Profile_ Purpose. Charging_ Profile_ Purpose_ Code
	 * urn:x-oca:ocpp:uid:1:569231
	 * Defines the purpose of the schedule transferred by this profile
	 */
	public null|string|ChargingProfilePurpose $chargingProfilePurpose = null;

	/**
	 * Charging_ Profile. Stack_ Level. Counter
	 * urn:x-oca:ocpp:uid:1:569230
	 * Value determining level in hierarchy stack of profiles. Higher values have precedence over lower values. Lowest level is 0.
	 */
	public ?int $stackLevel = null;

	/**
	 * List of all the chargingProfileIds requested. Any ChargingProfile that matches one of these profiles will be reported. If omitted, the Charging Station SHALL not filter on chargingProfileId. This field SHALL NOT contain more ids than set in <<configkey-charging-profile-entries,ChargingProfileEntries.maxLimit>>
	 */
	public ?array $chargingProfileId = null;

	/**
	 * For which charging limit sources, charging profiles SHALL be reported. If omitted, the Charging Station SHALL not filter on chargingLimitSource.
	 */
	public ?array $chargingLimitSource = null;
}
