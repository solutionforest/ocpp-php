<?php

namespace SolutionForest\OcppPhp\v201\CallResults;

use SolutionForest\OcppPhp\Messages\CallResult;
use SolutionForest\OcppPhp\v201\Enums\AuthorizeCertificateStatus;

class Authorize extends CallResult
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData;

	/**
	 * ID_ Token
	 * urn:x-oca:ocpp:uid:2:233247
	 * Contains status information about an identifier.
	 * It is advised to not stop charging for a token that expires during charging, as ExpiryDate is only used for caching purposes. If ExpiryDate is not given, the status has no end date.
	 */
	public object $idTokenInfo;

	/**
	 * Certificate status information.
	 * - if all certificates are valid: return 'Accepted'.
	 * - if one of the certificates was revoked, return 'CertificateRevoked'.
	 */
	public null|string|AuthorizeCertificateStatus $certificateStatus;
}
