<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;

class TaxRuleType extends Datatype
{
	/**
	 * Id for the tax rule.
	 */
	public int $taxRuleID;

	/**
	 * Human readable string to identify the tax rule.
	 */
	public ?string $taxRuleName = null;

	/**
	 * Indicates whether the tax is included in any price or not.
	 */
	public ?bool $taxIncludedInPrice = null;

	/**
	 * Indicates whether this tax applies to Energy Fees.
	 */
	public bool $appliesToEnergyFee;

	/**
	 * Indicates whether this tax applies to Parking Fees.
	 */
	public bool $appliesToParkingFee;

	/**
	 * Indicates whether this tax applies to Overstay Fees.
	 */
	public bool $appliesToOverstayFee;

	/**
	 * Indicates whether this tax applies to Minimum/Maximum Cost.
	 */
	public bool $appliesToMinimumMaximumCost;

	/**
	 * Part of ISO 15118-20 price schedule.
	 */
	public RationalNumberType $taxRate;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
