<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\OCPPInterface;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\OCPPTransport;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\OCPPVersion;

class NetworkConnectionProfileType extends Datatype
{
	/**
	 * Collection of configuration data needed to make a data-connection over a cellular network.
	 *
	 * NOTE: When asking a GSM modem to dial in, it is possible to specify which mobile operator should be used. This can be done with the mobile country code (MCC) in combination with a mobile network code (MNC). Example: If your preferred network is Vodafone Netherlands, the MCC=204 and the MNC=04 which means the key PreferredNetwork = 20404 Some modems allows to specify a preferred network, which means, if this network is not available, a different network is used. If you specify UseOnlyPreferredNetwork and this network is not available, the modem will not dial in.
	 */
	public ?APNType $apn = null;

	/**
	 * *(2.1)* This field is ignored, since the OCPP version to use is determined during the websocket handshake. The field is only kept for backwards compatibility with the OCPP 2.0.1 JSON schema.
	 */
	public null|string|OCPPVersion $ocppVersion = null;

	/**
	 * Applicable Network Interface. Charging Station is allowed to use a different network interface to connect if the given one does not work.
	 */
	public string|OCPPInterface $ocppInterface;

	/**
	 * Defines the transport protocol (e.g. SOAP or JSON). Note: SOAP is not supported in OCPP 2.x, but is supported by earlier versions of OCPP.
	 */
	public string|OCPPTransport $ocppTransport;

	/**
	 * Duration in seconds before a message send by the Charging Station via this network connection times-out.
	 * The best setting depends on the underlying network and response times of the CSMS.
	 * If you are looking for a some guideline: use 30 seconds as a starting point.
	 */
	public int $messageTimeout;

	/**
	 * URL of the CSMS(s) that this Charging Station communicates with, without the Charging Station identity part. +
	 * The SecurityCtrlr.Identity field is appended to _ocppCsmsUrl_ to provide the full websocket URL.
	 */
	public string $ocppCsmsUrl;

	/**
	 * This field specifies the security profile used when connecting to the CSMS with this NetworkConnectionProfile.
	 */
	public int $securityProfile;

	/**
	 * *(2.1)* Charging Station identity to be used as the basic authentication username.
	 */
	public ?string $identity = null;

	/**
	 * *(2.1)* BasicAuthPassword to use for security profile 1 or 2.
	 */
	public ?string $basicAuthPassword = null;

	/**
	 * VPN Configuration settings
	 */
	public ?VPNType $vpn = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
