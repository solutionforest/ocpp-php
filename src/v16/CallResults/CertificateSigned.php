<?php

namespace SolutionForest\OcppPhp\v16\CallResults;

use SolutionForest\OcppPhp\Messages\CallResult;
use SolutionForest\OcppPhp\v16\Enums\CertificateSignedStatus;

class CertificateSigned extends CallResult
{
	public string|CertificateSignedStatus $status;
}
