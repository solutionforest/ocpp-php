<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\EvseKind;

class TariffConditionsFixedType extends Datatype
{
	/**
	 * Start time of day in local time. +
	 * Format as per RFC 3339: time-hour ":" time-minute  +
	 * Must be in 24h format with leading zeros. Hour/Minute separator: ":"
	 * Regex: ([0-1][0-9]\|2[0-3]):[0-5][0-9]
	 */
	public ?string $startTimeOfDay = null;

	/**
	 * End time of day in local time. Same syntax as _startTimeOfDay_. +
	 *     If end time < start time then the period wraps around to the next day. +
	 *     To stop at end of the day use: 00:00.
	 */
	public ?string $endTimeOfDay = null;

	/**
	 * Day(s) of the week this is tariff applies.
	 */
	public ?array $dayOfWeek = null;

	/**
	 * Start date in local time, for example: 2015-12-24.
	 * Valid from this day (inclusive). +
	 * Format as per RFC 3339: full-date  +
	 *
	 * Regex: ([12][0-9]{3})-(0[1-9]\|1[0-2])-(0[1-9]\|[12][0-9]\|3[01])
	 */
	public ?string $validFromDate = null;

	/**
	 * End date in local time, for example: 2015-12-27.
	 *     Valid until this day (exclusive). Same syntax as _validFromDate_.
	 */
	public ?string $validToDate = null;

	/**
	 * Type of EVSE (AC, DC) this tariff applies to.
	 */
	public null|string|EvseKind $evseKind = null;

	/**
	 * For which payment brand this (adhoc) tariff applies. Can be used to add a surcharge for certain payment brands.
	 *     Based on value of _additionalIdToken_ from _idToken.additionalInfo.type_ = "PaymentBrand".
	 */
	public ?string $paymentBrand = null;

	/**
	 * Type of adhoc payment, e.g. CC, Debit.
	 *     Based on value of _additionalIdToken_ from _idToken.additionalInfo.type_ = "PaymentRecognition".
	 */
	public ?string $paymentRecognition = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
