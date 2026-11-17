<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Datatype;

class ChargingPeriodType extends Datatype
{
	/** @var list<CostDimensionType>|null */
	#[ListOf(CostDimensionType::class)]
	public ?array $dimensions = null;

	/**
	 * Unique identifier of the Tariff that was used to calculate cost. If not provided, then cost was calculated by some other means.
	 */
	public ?string $tariffId = null;

	/**
	 * Start timestamp of charging period. A period ends when the next period starts. The last period ends when the session ends.
	 */
	public string $startPeriod;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
