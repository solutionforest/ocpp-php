<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\CallResults;

use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\StatusInfoType;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\Iso15118EVCertificateStatus;

class Get15118EVCertificate extends CallResult
{
	/**
	 * Indicates whether the message was processed properly.
	 */
	public string|Iso15118EVCertificateStatus $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?StatusInfoType $statusInfo = null;

	/**
	 * *(2/1)* Raw CertificateInstallationRes response for the EV, Base64 encoded. +
	 * Extended to support ISO 15118-20 certificates. The minimum supported length is 17000. If a longer _exiResponse_ is supported, then the supported length must be communicated in variable OCPPCommCtrlr.FieldLength[ "Get15118EVCertificateResponse.exiResponse" ].
	 */
	public string $exiResponse;

	/**
	 * *(2.1)* Number of contracts that can be retrieved with additional requests.
	 */
	public ?int $remainingContracts = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
