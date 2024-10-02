<?php

namespace SolutionForest\OocpPhp\v201\Calls;

use SolutionForest\OocpPhp\Messages\Call;

class Authorize extends Call
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Contains a case insensitive identifier to use for the authorization and the type of authorization to support multiple forms of identifiers.
	 */
	public array $idToken;

	/**
	 * The X.509 certificated presented by EV and encoded in PEM format.
	 */
	public ?string $certificate = null;
	public ?array $iso15118CertificateHashData = null;
}
