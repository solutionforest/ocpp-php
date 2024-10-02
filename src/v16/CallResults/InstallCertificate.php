<?php

namespace SolutionForest\OocpPhp\v16\CallResults;

use SolutionForest\OocpPhp\CallResult;
use SolutionForest\OocpPhp\v16\Enums\InstallCertificateStatus;

class InstallCertificate extends CallResult
{
	public string|InstallCertificateStatus $status;
}
