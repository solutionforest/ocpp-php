<?php

namespace SolutionForest\OocpPhp\v16\Calls;

use SolutionForest\OocpPhp\Call;
use SolutionForest\OocpPhp\v16\Enums\CertificateUse;

class GetInstalledCertificateIds extends Call
{
	public string|CertificateUse $certificateType;
}
