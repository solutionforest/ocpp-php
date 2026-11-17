<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\CertificateAction;

class Get15118EVCertificate extends Call
{
	/**
	 * Schema version currently used for the 15118 session between EV and Charging Station. Needed for parsing of the EXI stream by the CSMS.
	 */
	public string $iso15118SchemaVersion;

	/**
	 * Defines whether certificate needs to be installed or updated.
	 */
	public string|CertificateAction $action;

	/**
	 * *(2.1)* Raw CertificateInstallationReq request from EV, Base64 encoded. +
	 * Extended to support ISO 15118-20 certificates. The minimum supported length is 11000. If a longer _exiRequest_ is supported, then the supported length must be communicated in variable OCPPCommCtrlr.FieldLength[ "Get15118EVCertificateRequest.exiRequest" ].
	 */
	public string $exiRequest;

	/**
	 * *(2.1)* Absent during ISO 15118-2 session. Required during ISO 15118-20 session. +
	 * Maximum number of contracts that EV wants to install.
	 */
	public ?int $maximumContractCertificateChains = null;

	/**
	 * *(2.1)*  Absent during ISO 15118-2 session. Optional during ISO 15118-20 session. List of EMAIDs for which contract certificates must be requested first, in case there are more certificates than allowed by _maximumContractCertificateChains_.
	 */
	public ?array $prioritizedEMAIDs = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
