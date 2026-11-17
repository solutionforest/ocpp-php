<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\CallResults;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\CertificateStatusType;

class GetCertificateChainStatus extends CallResult
{
	/** @var list<CertificateStatusType> */
	#[ListOf(CertificateStatusType::class)]
	public array $certificateStatus;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
