<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;

class TransactionLimitType extends Datatype
{
	/**
	 * Maximum allowed cost of transaction in currency of tariff.
	 */
	public ?float $maxCost = null;

	/**
	 * Maximum allowed energy in Wh to charge in transaction.
	 */
	public ?float $maxEnergy = null;

	/**
	 * Maximum duration of transaction in seconds from start to end.
	 */
	public ?int $maxTime = null;

	/**
	 * Maximum State of Charge of EV in percentage.
	 */
	public ?int $maxSoC = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
