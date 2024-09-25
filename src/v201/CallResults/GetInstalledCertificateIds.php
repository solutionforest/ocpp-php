<?php

namespace SolutionForest\OocpPhp\CallResults;

abstract class GetInstalledCertificateIds
{
	public string $status;
	public ?array $statusInfo = null;
	public ?array $certificateHashDataChain = null;
}
