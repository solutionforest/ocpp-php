<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\DERControl;

class GetDERControl extends Call
{
	/**
	 * RequestId to be used in ReportDERControlRequest.
	 */
	public int $requestId;

	/**
	 * True: get a default DER control. False: get a scheduled control.
	 */
	public ?bool $isDefault = null;

	/**
	 * Type of control settings to retrieve. Not used when _controlId_ is provided.
	 */
	public null|string|DERControl $controlType = null;

	/**
	 * Id of setting to get. When omitted all settings for _controlType_ are retrieved.
	 */
	public ?string $controlId = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
