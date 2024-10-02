<?php

namespace SolutionForest\OocpPhp\v16\CallResults;

use SolutionForest\OocpPhp\CallResult;
use SolutionForest\OocpPhp\v16\Enums\GetInstalledCertificateStatus;

class GetInstalledCertificateIds extends CallResult
{
	public ?array $certificateHashData = null;
	public string|GetInstalledCertificateStatus $status;
}
