<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class RequestStartTransaction
{
	public ?int $evseId = null;
	public ?array $groupIdToken = null;
	public array $idToken;
	public int $remoteStartId;
	public ?array $chargingProfile = null;
}
