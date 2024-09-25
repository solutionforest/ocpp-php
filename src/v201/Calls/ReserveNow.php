<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class ReserveNow
{
	public int $id;
	public string $expiryDateTime;
	public ?string $connectorType = null;
	public array $idToken;
	public ?int $evseId = null;
	public ?array $groupIdToken = null;
}
