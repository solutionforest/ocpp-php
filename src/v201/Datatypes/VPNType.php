<?php

namespace SolutionForest\OcppPhp\v201\Datatypes;

use SolutionForest\OcppPhp\v201\Enums\VPN;

class VPNType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * VPN. Server. URI
	 * urn:x-oca:ocpp:uid:1:569272
	 * VPN Server Address
	 */
	public string $server;

	/**
	 * VPN. User. User_ Name
	 * urn:x-oca:ocpp:uid:1:569273
	 * VPN User
	 */
	public string $user;

	/**
	 * VPN. Group. Group_ Name
	 * urn:x-oca:ocpp:uid:1:569274
	 * VPN group.
	 */
	public ?string $group = null;

	/**
	 * VPN. Password. Password
	 * urn:x-oca:ocpp:uid:1:569275
	 * VPN Password.
	 */
	public string $password;

	/**
	 * VPN. Key. VPN_ Key
	 * urn:x-oca:ocpp:uid:1:569276
	 * VPN shared secret.
	 */
	public string $key;

	/**
	 * VPN. Type. VPN_ Code
	 * urn:x-oca:ocpp:uid:1:569277
	 * Type of VPN
	 */
	public string|VPN $type;
}
