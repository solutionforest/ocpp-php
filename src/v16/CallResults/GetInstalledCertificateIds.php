<?php

namespace SolutionForest\OocpPhp\v16\CallResults;

abstract class GetInstalledCertificateIds
{
	public ?array $certificateHashData = null;
	public string|\SolutionForest\OocpPhp\v16\Enums\GetInstalledCertificateStatus $status;
}
