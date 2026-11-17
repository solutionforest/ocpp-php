<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\CallResults;

use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\IdTokenInfoType;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\TariffType;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\AuthorizeCertificateStatus;

class Authorize extends CallResult
{
	/**
	 * Contains status information about an identifier.
	 * It is advised to not stop charging for a token that expires during charging, as ExpiryDate is only used for caching purposes. If ExpiryDate is not given, the status has no end date.
	 */
	public IdTokenInfoType $idTokenInfo;

	/**
	 * Certificate status information.
	 * - if all certificates are valid: return 'Accepted'.
	 * - if one of the certificates was revoked, return 'CertificateRevoked'.
	 */
	public null|string|AuthorizeCertificateStatus $certificateStatus = null;

	/**
	 * *(2.1)* List of allowed energy transfer modes the EV can choose from. If omitted this defaults to charging only.
	 */
	public ?array $allowedEnergyTransfer = null;

	/**
	 * A tariff is described by fields with prices for:
	 * energy,
	 * charging time,
	 * idle time,
	 * fixed fee,
	 * reservation time,
	 * reservation fixed fee. +
	 * Each of these fields may have (optional) conditions that specify when a price is applicable. +
	 * The _description_ contains a human-readable explanation of the tariff to be shown to the user. +
	 * The other fields are parameters that define the tariff. These are used by the charging station to calculate the price.
	 */
	public ?TariffType $tariff = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
