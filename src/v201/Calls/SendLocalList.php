<?php

namespace SolutionForest\OocpPhp\v201\Calls;

use SolutionForest\OocpPhp\Call;
use SolutionForest\OocpPhp\v201\Enums\Update;

class SendLocalList extends Call
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;
	public ?array $localAuthorizationList = null;

	/**
	 * In case of a full update this is the version number of the full list. In case of a differential update it is the version number of the list after the update has been applied.
	 */
	public int $versionNumber;

	/**
	 * This contains the type of update (full or differential) of this request.
	 */
	public string|Update $updateType;
}
