<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\CallResults;

use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\StatusInfoType;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\GetDisplayMessagesStatus;

class GetDisplayMessages extends CallResult
{
	/**
	 * Indicates if the Charging Station has Display Messages that match the request criteria in the <<getdisplaymessagesrequest,GetDisplayMessagesRequest>>
	 */
	public string|GetDisplayMessagesStatus $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?StatusInfoType $statusInfo = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
