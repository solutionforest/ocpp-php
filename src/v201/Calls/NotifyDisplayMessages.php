<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class NotifyDisplayMessages
{
	public ?array $messageInfo = null;
	public int $requestId;
	public ?bool $tbc = null;
}
