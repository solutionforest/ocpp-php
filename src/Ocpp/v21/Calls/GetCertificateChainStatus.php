<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Calls;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\CertificateStatusRequestInfoType;

class GetCertificateChainStatus extends Call
{
	/** @var list<CertificateStatusRequestInfoType> */
	#[ListOf(CertificateStatusRequestInfoType::class)]
	public array $certificateStatusRequests;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
