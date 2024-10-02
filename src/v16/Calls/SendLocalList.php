<?php

namespace SolutionForest\OocpPhp\v16\Calls;

use SolutionForest\OocpPhp\Messages\Call;

class SendLocalList extends Call
{
	public int $listVersion;
	public ?array $localAuthorizationList = null;
	public string $updateType;
}
