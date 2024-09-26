<?php

namespace SolutionForest\OocpPhp\v16\Calls;

abstract class SendLocalList
{
	public int $listVersion;
	public ?array $localAuthorizationList = null;
	public string $updateType;
}
