<?php

namespace SolutionForest\OocpPhp\v201\Calls;

use SolutionForest\OocpPhp\Messages\Call;
use SolutionForest\OocpPhp\v201\Enums\CertificateAction;

class Get15118EVCertificate extends Call
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Schema version currently used for the 15118 session between EV and Charging Station. Needed for parsing of the EXI stream by the CSMS.
	 */
	public string $iso15118SchemaVersion;

	/**
	 * Defines whether certificate needs to be installed or updated.
	 */
	public string|CertificateAction $action;

	/**
	 * Raw CertificateInstallationReq request from EV, Base64 encoded.
	 */
	public string $exiRequest;
}
