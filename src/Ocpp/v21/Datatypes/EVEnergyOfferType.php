<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;

class EVEnergyOfferType extends Datatype
{
	/**
	 * *(2.1)* Price schedule of EV energy offer.
	 */
	public ?EVAbsolutePriceScheduleType $evAbsolutePriceSchedule = null;

	/**
	 * *(2.1)* Schedule of EV energy offer.
	 */
	public EVPowerScheduleType $evPowerSchedule;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
