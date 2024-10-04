<?php

namespace SolutionForest\OcppPhp\v16\Calls;

use SolutionForest\OcppPhp\Messages\Call;
use SolutionForest\OcppPhp\v16\Enums\CertificateUse;

class GetInstalledCertificateIds extends Call
{
	public string|CertificateUse $certificateType;
}
