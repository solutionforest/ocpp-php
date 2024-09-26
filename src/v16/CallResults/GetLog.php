<?php

namespace SolutionForest\OocpPhp\v16\CallResults;

abstract class GetLog
{
	public string|\SolutionForest\OocpPhp\v16\Enums\LogStatus $status;
	public ?string $filename = null;
}
