<?php

namespace SolutionForest\OcppPhp\v16\Calls;

use SolutionForest\OcppPhp\Messages\Call;
use SolutionForest\OcppPhp\v16\Enums\CertificateUse;

class InstallCertificate extends Call
{
	public string|CertificateUse $certificateType;
	public string $certificate;
}
