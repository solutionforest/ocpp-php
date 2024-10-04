<?php

namespace SolutionForest\OcppPhp\v16\CallResults;

use SolutionForest\OcppPhp\Messages\CallResult;
use SolutionForest\OcppPhp\v16\Enums\GenericStatus;

class SignCertificate extends CallResult
{
	public string|GenericStatus $status;
}
