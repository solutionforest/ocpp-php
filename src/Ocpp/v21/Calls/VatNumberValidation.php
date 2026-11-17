<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;

class VatNumberValidation extends Call
{
	/**
	 * VAT number to check.
	 */
	public string $vatNumber;

	/**
	 * EVSE id for which check is done
	 */
	public ?int $evseId = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
