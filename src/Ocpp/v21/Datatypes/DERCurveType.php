<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Datatype;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\DERUnit;

class DERCurveType extends Datatype
{
	/** @var list<DERCurvePointsType> */
	#[ListOf(DERCurvePointsType::class)]
	public array $curveData;
	public ?HysteresisType $hysteresis = null;

	/**
	 * Priority of curve (0=highest)
	 */
	public int $priority;
	public ?ReactivePowerParamsType $reactivePowerParams = null;
	public ?VoltageParamsType $voltageParams = null;

	/**
	 * Unit of the setpoint.
	 */
	public string|DERUnit $yUnit;

	/**
	 * Open loop response time, the time to ramp up to 90% of the new target in response to the change in voltage, in seconds. A value of 0 is used to mean no limit. When not present, the device should follow its default behavior.
	 */
	public ?float $responseTime = null;

	/**
	 * Point in time when this curve will become activated. Only absent when _default_ is true.
	 */
	public ?string $startTime = null;

	/**
	 * Duration in seconds that this curve will be active. Only absent when _default_ is true.
	 */
	public ?float $duration = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
