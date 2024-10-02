<?php

namespace SolutionForest\OocpPhp\v16\CallResults;

use SolutionForest\OocpPhp\CallResult;
use SolutionForest\OocpPhp\v16\Enums\CertificateSignedStatus;

class CertificateSigned extends CallResult
{
	public string|CertificateSignedStatus $status;
}
