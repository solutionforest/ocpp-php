<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\CallResults;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;
use SolutionForest\OcppPhp\Ocpp\v16\Datatypes\CertificateHashDataType;
use SolutionForest\OcppPhp\Ocpp\v16\Enums\GetInstalledCertificateStatus;

class GetInstalledCertificateIds extends CallResult
{
	/** @var list<CertificateHashDataType>|null */
	#[ListOf(CertificateHashDataType::class)]
	public ?array $certificateHashData = null;
	public string|GetInstalledCertificateStatus $status;
}
