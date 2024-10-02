<?php

namespace SolutionForest\OocpPhp\v201\CallResults;

use SolutionForest\OocpPhp\Messages\CallResult;
use SolutionForest\OocpPhp\v201\Enums\SendLocalListStatus;

class SendLocalList extends CallResult
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * This indicates whether the Charging Station has successfully received and applied the update of the Local Authorization List.
	 */
	public string|SendLocalListStatus $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?array $statusInfo = null;
}
