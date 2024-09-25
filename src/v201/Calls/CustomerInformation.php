<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class CustomerInformation
{
	public ?array $customerCertificate = null;
	public ?array $idToken = null;
	public int $requestId;
	public bool $report;
	public bool $clear;
	public ?string $customerIdentifier = null;
}
