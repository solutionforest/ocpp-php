<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\EvseKind;

class TariffConditionsType extends Datatype
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
	 * Minimum consumed energy in Wh, for example 20000 Wh.
	 *     Valid from this amount of energy (inclusive) being used.
	 */
	public ?float $minEnergy = null;

	/**
	 * Maximum consumed energy in Wh, for example 50000 Wh.
	 *     Valid until this amount of energy (exclusive) being used.
	 */
	public ?float $maxEnergy = null;

	/**
	 * Sum of the minimum current (in Amperes) over all phases, for example 5 A.
	 *     When the EV is charging with more than, or equal to, the defined amount of current, this price is/becomes active. If the charging current is or becomes lower, this price is not or no longer valid and becomes inactive. +
	 *     This is NOT about the minimum current over the entire transaction.
	 */
	public ?float $minCurrent = null;

	/**
	 * Sum of the maximum current (in Amperes) over all phases, for example 20 A.
	 *       When the EV is charging with less than the defined amount of current, this price becomes/is active. If the charging current is or becomes higher, this price is not or no longer valid and becomes inactive.
	 *       This is NOT about the maximum current over the entire transaction.
	 */
	public ?float $maxCurrent = null;

	/**
	 * Minimum power in W, for example 5000 W.
	 *       When the EV is charging with more than, or equal to, the defined amount of power, this price is/becomes active.
	 *       If the charging power is or becomes lower, this price is not or no longer valid and becomes inactive.
	 *       This is NOT about the minimum power over the entire transaction.
	 */
	public ?float $minPower = null;

	/**
	 * Maximum power in W, for example 20000 W.
	 *       When the EV is charging with less than the defined amount of power, this price becomes/is active.
	 *       If the charging power is or becomes higher, this price is not or no longer valid and becomes inactive.
	 *       This is NOT about the maximum power over the entire transaction.
	 */
	public ?float $maxPower = null;

	/**
	 * Minimum duration in seconds the transaction (charging & idle) MUST last (inclusive).
	 *       When the duration of a transaction is longer than the defined value, this price is or becomes active.
	 *       Before that moment, this price is not yet active.
	 */
	public ?int $minTime = null;

	/**
	 * Maximum duration in seconds the transaction (charging & idle) MUST last (exclusive).
	 *       When the duration of a transaction is shorter than the defined value, this price is or becomes active.
	 *       After that moment, this price is no longer active.
	 */
	public ?int $maxTime = null;

	/**
	 * Minimum duration in seconds the charging MUST last (inclusive).
	 *       When the duration of a charging is longer than the defined value, this price is or becomes active.
	 *       Before that moment, this price is not yet active.
	 */
	public ?int $minChargingTime = null;

	/**
	 * Maximum duration in seconds the charging MUST last (exclusive).
	 *       When the duration of a charging is shorter than the defined value, this price is or becomes active.
	 *       After that moment, this price is no longer active.
	 */
	public ?int $maxChargingTime = null;

	/**
	 * Minimum duration in seconds the idle period (i.e. not charging) MUST last (inclusive).
	 *       When the duration of the idle time is longer than the defined value, this price is or becomes active.
	 *       Before that moment, this price is not yet active.
	 */
	public ?int $minIdleTime = null;

	/**
	 * Maximum duration in seconds the idle period (i.e. not charging) MUST last (exclusive).
	 *       When the duration of idle time is shorter than the defined value, this price is or becomes active.
	 *       After that moment, this price is no longer active.
	 */
	public ?int $maxIdleTime = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
