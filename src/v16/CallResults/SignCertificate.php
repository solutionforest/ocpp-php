<?php

namespace SolutionForest\OocpPhp\v16\CallResults;

use SolutionForest\OocpPhp\Messages\CallResult;
use SolutionForest\OocpPhp\v16\Enums\GenericStatus;

class SignCertificate extends CallResult
{
	public string|GenericStatus $status;
}
