<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Calls;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v201\Datatypes\IdTokenType;
use SolutionForest\OcppPhp\Ocpp\v201\Datatypes\OCSPRequestDataType;

class Authorize extends Call
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;

	/**
	 * Contains a case insensitive identifier to use for the authorization and the type of authorization to support multiple forms of identifiers.
	 */
	public IdTokenType $idToken;

	/**
	 * The X.509 certificated presented by EV and encoded in PEM format.
	 */
	public ?string $certificate = null;

	/** @var list<OCSPRequestDataType>|null */
	#[ListOf(OCSPRequestDataType::class)]
	public ?array $iso15118CertificateHashData = null;
}
