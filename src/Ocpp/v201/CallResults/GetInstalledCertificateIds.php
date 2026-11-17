<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\CallResults;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;
use SolutionForest\OcppPhp\Ocpp\v201\Datatypes\CertificateHashDataChainType;
use SolutionForest\OcppPhp\Ocpp\v201\Datatypes\StatusInfoType;
use SolutionForest\OcppPhp\Ocpp\v201\Enums\GetInstalledCertificateStatus;

class GetInstalledCertificateIds extends CallResult
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;

	/**
	 * Charging Station indicates if it can process the request.
	 */
	public string|GetInstalledCertificateStatus $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?StatusInfoType $statusInfo = null;

	/** @var list<CertificateHashDataChainType>|null */
	#[ListOf(CertificateHashDataChainType::class)]
	public ?array $certificateHashDataChain = null;
}
