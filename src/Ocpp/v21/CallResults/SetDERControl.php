<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\CallResults;

use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\StatusInfoType;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\DERControlStatus;

class SetDERControl extends CallResult
{
	/**
	 * Result of operation.
	 */
	public string|DERControlStatus $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?StatusInfoType $statusInfo = null;

	/**
	 * List of controlIds that are superseded as a result of setting this control.
	 */
	public ?array $supersededIds = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
