<?php

namespace SolutionForest\OocpPhp\CallResults;

abstract class GetCertificateStatus
{
	public string $status;
	public ?array $statusInfo = null;
	public ?string $ocspResult = null;
}
