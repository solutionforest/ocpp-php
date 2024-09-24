<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class SendLocalList
{
	public int $listVersion;
	public ?array $localAuthorizationList = null;
	public string $updateType;
}
