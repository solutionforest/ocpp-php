<?php

namespace SolutionForest\OcppPhp\v16\CallResults;

use SolutionForest\OcppPhp\Messages\CallResult;
use SolutionForest\OcppPhp\v16\Enums\InstallCertificateStatus;

class InstallCertificate extends CallResult
{
	public string|InstallCertificateStatus $status;
}
