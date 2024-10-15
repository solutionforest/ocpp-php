<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;

class SendLocalList extends Call
{
	public int $listVersion;
	public ?array $localAuthorizationList;
	public string $updateType;
}
