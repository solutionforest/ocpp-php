<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v16\Enums\CertificateUse;

class InstallCertificate extends Call
{
	public string|CertificateUse $certificateType;
	public string $certificate;
}
