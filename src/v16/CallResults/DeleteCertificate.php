<?php

namespace SolutionForest\OcppPhp\v16\CallResults;

use SolutionForest\OcppPhp\Messages\CallResult;
use SolutionForest\OcppPhp\v16\Enums\DeleteCertificateStatus;

class DeleteCertificate extends CallResult
{
	public string|DeleteCertificateStatus $status;
}
