<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;

class TariffFixedPriceType extends Datatype
{
	/**
	 * These conditions describe if a FixedPrice applies at start of the transaction.
	 *
	 * When more than one restriction is set, they are to be treated as a logical AND. All need to be valid before this price is active.
	 *
	 * NOTE: _startTimeOfDay_ and _endTimeOfDay_ are in local time, because it is the time in the tariff as it is shown to the EV driver at the Charging Station.
	 * A Charging Station will convert this to the internal time zone that it uses (which is recommended to be UTC, see section Generic chapter 3.1) when performing cost calculation.
	 */
	public ?TariffConditionsFixedType $conditions = null;

	/**
	 * Fixed price  for this element e.g. a start fee.
	 */
	public float $priceFixed;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
