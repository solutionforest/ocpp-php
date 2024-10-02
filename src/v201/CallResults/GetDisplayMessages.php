<?php

namespace SolutionForest\OocpPhp\v201\CallResults;

use SolutionForest\OocpPhp\CallResult;
use SolutionForest\OocpPhp\v201\Enums\GetDisplayMessagesStatus;

class GetDisplayMessages extends CallResult
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Indicates if the Charging Station has Display Messages that match the request criteria in the <<getdisplaymessagesrequest,GetDisplayMessagesRequest>>
	 */
	public string|GetDisplayMessagesStatus $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?array $statusInfo = null;
}
