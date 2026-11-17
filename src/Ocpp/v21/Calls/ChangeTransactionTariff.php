<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\TariffType;

class ChangeTransactionTariff extends Call
{
	/**
	 * A tariff is described by fields with prices for:
	 * energy,
	 * charging time,
	 * idle time,
	 * fixed fee,
	 * reservation time,
	 * reservation fixed fee. +
	 * Each of these fields may have (optional) conditions that specify when a price is applicable. +
	 * The _description_ contains a human-readable explanation of the tariff to be shown to the user. +
	 * The other fields are parameters that define the tariff. These are used by the charging station to calculate the price.
	 */
	public TariffType $tariff;

	/**
	 * Transaction id for new tariff.
	 */
	public string $transactionId;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
