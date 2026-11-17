<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Datatype;

class EVPowerScheduleType extends Datatype
{
	/** @var list<EVPowerScheduleEntryType> */
	#[ListOf(EVPowerScheduleEntryType::class)]
	public array $evPowerScheduleEntries;

	/**
	 * The time that defines the starting point for the EVEnergyOffer.
	 */
	public string $timeAnchor;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
