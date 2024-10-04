<?php

namespace SolutionForest\OcppPhp\v16\Calls;

use SolutionForest\OcppPhp\Messages\Call;

class SendLocalList extends Call
{
	public int $listVersion;
	public ?array $localAuthorizationList = null;
	public string $updateType;
}
