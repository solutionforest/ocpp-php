<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\VPN;

class VPNType extends Datatype
{
	/**
	 * VPN Server Address
	 */
	public string $server;

	/**
	 * VPN User
	 */
	public string $user;

	/**
	 * VPN group.
	 */
	public ?string $group = null;

	/**
	 * *(2.1)* VPN Password.
	 */
	public string $password;

	/**
	 * VPN shared secret.
	 */
	public string $key;

	/**
	 * Type of VPN
	 */
	public string|VPN $type;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
