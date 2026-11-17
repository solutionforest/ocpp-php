<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\PowerDuringCessation;

class VoltageParamsType extends Datatype
{
	/**
	 * EN 50549-1 chapter 4.9.3.4
	 *     Voltage threshold for the 10 min time window mean value monitoring.
	 *     The 10 min mean is recalculated up to every 3 s.
	 *     If the present voltage is above this threshold for more than the time defined by _hv10MinMeanValue_, the EV must trip.
	 *     This value is mandatory if _hv10MinMeanTripDelay_ is set.
	 */
	public ?float $hv10MinMeanValue = null;

	/**
	 * Time for which the voltage is allowed to stay above the 10 min mean value.
	 *     After this time, the EV must trip.
	 *     This value is mandatory if OverVoltageMeanValue10min is set.
	 */
	public ?float $hv10MinMeanTripDelay = null;

	/**
	 * Parameter is only sent, if the EV has to feed-in power or reactive power during fault-ride through (FRT) as defined by HVMomCess curve and LVMomCess curve.
	 */
	public null|string|PowerDuringCessation $powerDuringCessation = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
