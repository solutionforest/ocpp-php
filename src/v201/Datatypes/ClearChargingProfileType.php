<?php

namespace SolutionForest\OocpPhp\v201\Datatypes;

abstract class ClearChargingProfileType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Identified_ Object. MRID. Numeric_ Identifier
	 * urn:x-enexis:ecdm:uid:1:569198
	 * Specifies the id of the EVSE for which to clear charging profiles. An evseId of zero (0) specifies the charging profile for the overall Charging Station. Absence of this parameter means the clearing applies to all charging profiles that match the other criteria in the request.
	 */
	public ?int $evseId = null;

	/**
	 * Charging_ Profile. Charging_ Profile_ Purpose. Charging_ Profile_ Purpose_ Code
	 * urn:x-oca:ocpp:uid:1:569231
	 * Specifies to purpose of the charging profiles that will be cleared, if they meet the other criteria in the request.
	 */
	public null|string|\SolutionForest\OocpPhp\v201\Enums\ChargingProfilePurpose $chargingProfilePurpose = null;

	/**
	 * Charging_ Profile. Stack_ Level. Counter
	 * urn:x-oca:ocpp:uid:1:569230
	 * Specifies the stackLevel for which charging profiles will be cleared, if they meet the other criteria in the request.
	 */
	public ?int $stackLevel = null;
}
