<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\CallResults;

use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;
use SolutionForest\OcppPhp\Ocpp\v16\Enums\CertificateSignedStatus;

class CertificateSigned extends CallResult
{
	public string|CertificateSignedStatus $status;
}
