<?php

namespace SolutionForest\OcppPhp\v201\Calls;

use SolutionForest\OcppPhp\Messages\Call;

class Authorize extends Call
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData;

	/**
	 * Contains a case insensitive identifier to use for the authorization and the type of authorization to support multiple forms of identifiers.
	 */
	public object $idToken;

	/**
	 * The X.509 certificated presented by EV and encoded in PEM format.
	 */
	public ?string $certificate;
	public ?array $iso15118CertificateHashData;
}
