<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\CallResults;

use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;
use SolutionForest\OcppPhp\Ocpp\v16\Enums\InstallCertificateStatus;

class InstallCertificate extends CallResult
{
	public string|InstallCertificateStatus $status;
}
