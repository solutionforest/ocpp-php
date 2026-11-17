<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;

class CostUpdated extends Call
{
	/**
	 * Current total cost, based on the information known by the CSMS, of the transaction including taxes. In the currency configured with the configuration Variable: [<<configkey-currency, Currency>>]
	 */
	public float $totalCost;

	/**
	 * Transaction Id of the transaction the current cost are asked for.
	 */
	public string $transactionId;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
