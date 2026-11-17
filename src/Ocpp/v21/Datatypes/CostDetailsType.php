<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Datatype;

class CostDetailsType extends Datatype
{
	/** @var list<ChargingPeriodType>|null */
	#[ListOf(ChargingPeriodType::class)]
	public ?array $chargingPeriods = null;

	/**
	 * This contains the cost calculated during a transaction. It is used both for running cost and final cost of the transaction.
	 */
	public TotalCostType $totalCost;

	/**
	 * This contains the calculated usage of energy, charging time and idle time during a transaction.
	 */
	public TotalUsageType $totalUsage;

	/**
	 * If set to true, then Charging Station has failed to calculate the cost.
	 */
	public ?bool $failureToCalculate = null;

	/**
	 * Optional human-readable reason text in case of failure to calculate.
	 */
	public ?string $failureReason = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
