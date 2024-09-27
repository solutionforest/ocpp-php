<?php

namespace SolutionForest\OocpPhp\v201\Datatypes;

abstract class NetworkConnectionProfileType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * APN
	 * urn:x-oca:ocpp:uid:2:233134
	 * Collection of configuration data needed to make a data-connection over a cellular network.
	 *
	 * NOTE: When asking a GSM modem to dial in, it is possible to specify which mobile operator should be used. This can be done with the mobile country code (MCC) in combination with a mobile network code (MNC). Example: If your preferred network is Vodafone Netherlands, the MCC=204 and the MNC=04 which means the key PreferredNetwork = 20404 Some modems allows to specify a preferred network, which means, if this network is not available, a different network is used. If you specify UseOnlyPreferredNetwork and this network is not available, the modem will not dial in.
	 */
	public ?array $apn = null;

	/**
	 * Communication_ Function. OCPP_ Version. OCPP_ Version_ Code
	 * urn:x-oca:ocpp:uid:1:569355
	 * Defines the OCPP version used for this communication function.
	 */
	public string|\SolutionForest\OocpPhp\v201\Enums\OCPPVersion $ocppVersion;

	/**
	 * Communication_ Function. OCPP_ Transport. OCPP_ Transport_ Code
	 * urn:x-oca:ocpp:uid:1:569356
	 * Defines the transport protocol (e.g. SOAP or JSON). Note: SOAP is not supported in OCPP 2.0, but is supported by other versions of OCPP.
	 */
	public string|\SolutionForest\OocpPhp\v201\Enums\OCPPTransport $ocppTransport;

	/**
	 * Communication_ Function. OCPP_ Central_ System_ URL. URI
	 * urn:x-oca:ocpp:uid:1:569357
	 * URL of the CSMS(s) that this Charging Station  communicates with.
	 */
	public string $ocppCsmsUrl;

	/**
	 * Duration in seconds before a message send by the Charging Station via this network connection times-out.
	 * The best setting depends on the underlying network and response times of the CSMS.
	 * If you are looking for a some guideline: use 30 seconds as a starting point.
	 */
	public int $messageTimeout;

	/**
	 * This field specifies the security profile used when connecting to the CSMS with this NetworkConnectionProfile.
	 */
	public int $securityProfile;

	/**
	 * Applicable Network Interface.
	 */
	public string|\SolutionForest\OocpPhp\v201\Enums\OCPPInterface $ocppInterface;

	/**
	 * VPN
	 * urn:x-oca:ocpp:uid:2:233268
	 * VPN Configuration settings
	 */
	public ?array $vpn = null;
}
