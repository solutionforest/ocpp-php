<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v16\Datatypes\CertificateHashDataType;

class DeleteCertificate extends Call
{
	public CertificateHashDataType $certificateHashData;
}
