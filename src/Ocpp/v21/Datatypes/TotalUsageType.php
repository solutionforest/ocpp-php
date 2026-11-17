<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;

class TotalUsageType extends Datatype
{
	public float $energy;

	/**
	 * Total duration of the charging session (including the duration of charging and not charging), in seconds.
	 */
	public int $chargingTime;

	/**
	 * Total duration of the charging session where the EV was not charging (no energy was transferred between EVSE and EV), in seconds.
	 */
	public int $idleTime;

	/**
	 * Total time of reservation in seconds.
	 */
	public ?int $reservationTime = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
