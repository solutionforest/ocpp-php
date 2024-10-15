<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\CallResults;

use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;
use SolutionForest\OcppPhp\Ocpp\v16\Enums\DeleteCertificateStatus;

class DeleteCertificate extends CallResult
{
	public string|DeleteCertificateStatus $status;
}
