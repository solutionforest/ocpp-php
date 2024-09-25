<?php

namespace SolutionForest\OocpPhp\CallResults;

abstract class Authorize
{
	public array $idTokenInfo;
	public ?string $certificateStatus = null;
}
