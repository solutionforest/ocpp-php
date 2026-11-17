<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\ChargingProfilePurpose;

class ChargingProfileCriterionType extends Datatype
{
	/**
	 * Defines the purpose of the schedule transferred by this profile
	 */
	public null|string|ChargingProfilePurpose $chargingProfilePurpose = null;

	/**
	 * Value determining level in hierarchy stack of profiles. Higher values have precedence over lower values. Lowest level is 0.
	 */
	public ?int $stackLevel = null;

	/**
	 * List of all the chargingProfileIds requested. Any ChargingProfile that matches one of these profiles will be reported. If omitted, the Charging Station SHALL not filter on chargingProfileId. This field SHALL NOT contain more ids than set in <<configkey-charging-profile-entries,ChargingProfileEntries.maxLimit>>
	 */
	public ?array $chargingProfileId = null;

	/**
	 * For which charging limit sources, charging profiles SHALL be reported. If omitted, the Charging Station SHALL not filter on chargingLimitSource. Values defined in Appendix as ChargingLimitSourceEnumStringType.
	 */
	public ?array $chargingLimitSource = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
