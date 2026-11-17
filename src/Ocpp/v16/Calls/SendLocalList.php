<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Calls;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v16\Datatypes\AuthorizationData;
use SolutionForest\OcppPhp\Ocpp\v16\Enums\UpdateType;

class SendLocalList extends Call
{
	public int $listVersion;

	/** @var list<AuthorizationData>|null */
	#[ListOf(AuthorizationData::class)]
	public ?array $localAuthorizationList = null;
	public string|UpdateType $updateType;
}
