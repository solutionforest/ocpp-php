<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Calls;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\AuthorizationData;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\Update;

class SendLocalList extends Call
{
	/** @var list<AuthorizationData>|null */
	#[ListOf(AuthorizationData::class)]
	public ?array $localAuthorizationList = null;

	/**
	 * In case of a full update this is the version number of the full list. In case of a differential update it is the version number of the list after the update has been applied.
	 */
	public int $versionNumber;

	/**
	 * This contains the type of update (full or differential) of this request.
	 */
	public string|Update $updateType;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
