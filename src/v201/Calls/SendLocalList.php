<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class SendLocalList
{
	public ?array $localAuthorizationList = null;
	public int $versionNumber;
	public string $updateType;
}
