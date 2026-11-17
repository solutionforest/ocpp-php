<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\DERControl;

class ClearDERControl extends Call
{
	/**
	 * True: clearing default DER controls. False: clearing scheduled controls.
	 */
	public bool $isDefault;

	/**
	 * Name of control settings to clear. Not used when _controlId_ is provided.
	 */
	public null|string|DERControl $controlType = null;

	/**
	 * Id of control setting to clear. When omitted all settings for _controlType_ are cleared.
	 */
	public ?string $controlId = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
