<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;

class TariffTimePriceType extends Datatype
{
	/**
	 * Price per minute (excl. tax) for this element.
	 */
	public float $priceMinute;

	/**
	 * These conditions describe if and when a TariffEnergyType or TariffTimeType applies during a transaction.
	 *
	 * When more than one restriction is set, they are to be treated as a logical AND. All need to be valid before this price is active.
	 *
	 * For reverse energy flow (discharging) negative values of energy, power and current are used.
	 *
	 * NOTE: _minXXX_ (where XXX = Kwh/A/Kw) must be read as "closest to zero", and _maxXXX_ as "furthest from zero". For example, a *charging* power range from 10 kW to 50 kWh is given by _minPower_ = 10000 and _maxPower_ = 50000, and a *discharging* power range from -10 kW to -50 kW is given by _minPower_ = -10 and _maxPower_ = -50.
	 *
	 * NOTE: _startTimeOfDay_ and _endTimeOfDay_ are in local time, because it is the time in the tariff as it is shown to the EV driver at the Charging Station.
	 * A Charging Station will convert this to the internal time zone that it uses (which is recommended to be UTC, see section Generic chapter 3.1) when performing cost calculation.
	 */
	public ?TariffConditionsType $conditions = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
