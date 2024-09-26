<?php

namespace SolutionForest\OocpPhp\v16\Calls;

abstract class InstallCertificate
{
	public string|\SolutionForest\OocpPhp\v16\Enums\CertificateUse $certificateType;
	public string $certificate;
}
