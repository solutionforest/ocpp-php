<?php

namespace SolutionForest\OocpPhp\v16\Calls;

use SolutionForest\OocpPhp\Messages\Call;

class RemoteStartTransaction extends Call
{
	public ?int $connectorId = null;
	public string $idTag;
	public ?array $chargingProfile = null;
}
