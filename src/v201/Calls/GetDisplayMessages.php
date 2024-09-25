<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class GetDisplayMessages
{
	public ?array $id = null;
	public int $requestId;
	public ?string $priority = null;
	public ?string $state = null;
}
