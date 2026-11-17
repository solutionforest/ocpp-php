<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;

class ClearTariffs extends Call
{
	/**
	 * List of tariff Ids to clear. When absent clears all tariffs at _evseId_.
	 */
	public ?array $tariffIds = null;

	/**
	 * When present only clear tariffs matching _tariffIds_ at EVSE _evseId_.
	 */
	public ?int $evseId = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
