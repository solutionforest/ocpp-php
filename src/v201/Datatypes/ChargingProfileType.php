<?php

namespace SolutionForest\OocpPhp\v201\Datatypes;

abstract class ChargingProfileType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Identified_ Object. MRID. Numeric_ Identifier
	 * urn:x-enexis:ecdm:uid:1:569198
	 * Id of ChargingProfile.
	 */
	public ?int $id = null;

	/**
	 * Charging_ Profile. Stack_ Level. Counter
	 * urn:x-oca:ocpp:uid:1:569230
	 * Value determining level in hierarchy stack of profiles. Higher values have precedence over lower values. Lowest level is 0.
	 */
	public ?int $stackLevel = null;

	/**
	 * Charging_ Profile. Charging_ Profile_ Purpose. Charging_ Profile_ Purpose_ Code
	 * urn:x-oca:ocpp:uid:1:569231
	 * Defines the purpose of the schedule transferred by this profile
	 */
	public null|string|\SolutionForest\OocpPhp\v201\Enums\ChargingProfilePurpose $chargingProfilePurpose = null;

	/**
	 * Charging_ Profile. Charging_ Profile_ Kind. Charging_ Profile_ Kind_ Code
	 * urn:x-oca:ocpp:uid:1:569232
	 * Indicates the kind of schedule.
	 */
	public null|string|\SolutionForest\OocpPhp\v201\Enums\ChargingProfileKind $chargingProfileKind = null;

	/**
	 * Charging_ Profile. Recurrency_ Kind. Recurrency_ Kind_ Code
	 * urn:x-oca:ocpp:uid:1:569233
	 * Indicates the start point of a recurrence.
	 */
	public null|string|\SolutionForest\OocpPhp\v201\Enums\RecurrencyKind $recurrencyKind = null;

	/**
	 * Charging_ Profile. Valid_ From. Date_ Time
	 * urn:x-oca:ocpp:uid:1:569234
	 * Point in time at which the profile starts to be valid. If absent, the profile is valid as soon as it is received by the Charging Station.
	 */
	public ?string $validFrom = null;

	/**
	 * Charging_ Profile. Valid_ To. Date_ Time
	 * urn:x-oca:ocpp:uid:1:569235
	 * Point in time at which the profile stops to be valid. If absent, the profile is valid until it is replaced by another profile.
	 */
	public ?string $validTo = null;
	public ?array $chargingSchedule = null;

	/**
	 * SHALL only be included if ChargingProfilePurpose is set to TxProfile. The transactionId is used to match the profile to a specific transaction.
	 */
	public ?string $transactionId = null;
}
