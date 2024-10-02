<?php

namespace SolutionForest\OocpPhp\v16\Calls;

use SolutionForest\OocpPhp\Messages\Call;
use SolutionForest\OocpPhp\v16\Enums\CertificateUse;

class InstallCertificate extends Call
{
	public string|CertificateUse $certificateType;
	public string $certificate;
}
