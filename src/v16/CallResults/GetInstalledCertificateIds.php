<?php

namespace SolutionForest\OcppPhp\v16\CallResults;

use SolutionForest\OcppPhp\Messages\CallResult;
use SolutionForest\OcppPhp\v16\Enums\GetInstalledCertificateStatus;

class GetInstalledCertificateIds extends CallResult
{
	public ?array $certificateHashData;
	public string|GetInstalledCertificateStatus $status;
}
