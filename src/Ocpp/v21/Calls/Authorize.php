<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Calls;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\IdTokenType;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\OCSPRequestDataType;

class Authorize extends Call
{
	/**
	 * Contains a case insensitive identifier to use for the authorization and the type of authorization to support multiple forms of identifiers.
	 */
	public IdTokenType $idToken;

	/**
	 * *(2.1)* The X.509 certificate chain presented by EV and encoded in PEM format. Order of certificates in chain is from leaf up to (but excluding) root certificate. +
	 * Only needed in case of central contract validation when Charging Station cannot validate the contract certificate.
	 */
	public ?string $certificate = null;

	/** @var list<OCSPRequestDataType>|null */
	#[ListOf(OCSPRequestDataType::class)]
	public ?array $iso15118CertificateHashData = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
