<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;

class TaxRateType extends Datatype
{
	/**
	 * Type of this tax, e.g.  "Federal ",  "State", for information on receipt.
	 */
	public string $type;

	/**
	 * Tax percentage
	 */
	public float $tax;

	/**
	 * Stack level for this type of tax. Default value, when absent, is 0. +
	 * _stack_ = 0: tax on net price; +
	 * _stack_ = 1: tax added on top of _stack_ 0; +
	 * _stack_ = 2: tax added on top of _stack_ 1, etc.
	 */
	public ?int $stack = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
