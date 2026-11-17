<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Datatype;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\GetCertificateIdUse;

class CertificateHashDataChainType extends Datatype
{
	public CertificateHashDataType $certificateHashData;

	/**
	 * Indicates the type of the requested certificate(s).
	 */
	public string|GetCertificateIdUse $certificateType;

	/** @var list<CertificateHashDataType>|null */
	#[ListOf(CertificateHashDataType::class)]
	public ?array $childCertificateHashData = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
