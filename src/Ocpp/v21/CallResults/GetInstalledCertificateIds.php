<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\CallResults;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\CertificateHashDataChainType;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\StatusInfoType;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\GetInstalledCertificateStatus;

class GetInstalledCertificateIds extends CallResult
{
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

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
