<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\TariffKind;

class TariffAssignmentType extends Datatype
{
	/**
	 * Tariff id.
	 */
	public string $tariffId;

	/**
	 * Kind of tariff (driver/default)
	 */
	public string|TariffKind $tariffKind;

	/**
	 * Date/time when this tariff become active.
	 */
	public ?string $validFrom = null;
	public ?array $evseIds = null;

	/**
	 * IdTokens related to tariff
	 */
	public ?array $idTokens = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
