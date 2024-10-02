<?php

namespace SolutionForest\OocpPhp\v16\CallResults;

use SolutionForest\OocpPhp\Messages\CallResult;
use SolutionForest\OocpPhp\v16\Enums\DeleteCertificateStatus;

class DeleteCertificate extends CallResult
{
	public string|DeleteCertificateStatus $status;
}
