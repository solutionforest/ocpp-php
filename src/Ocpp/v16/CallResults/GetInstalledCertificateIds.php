<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\CallResults;

use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;
use SolutionForest\OcppPhp\Ocpp\v16\Enums\GetInstalledCertificateStatus;

class GetInstalledCertificateIds extends CallResult
{
	public ?array $certificateHashData;
	public string|GetInstalledCertificateStatus $status;
}
