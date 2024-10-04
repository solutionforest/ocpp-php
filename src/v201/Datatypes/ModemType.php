<?php

namespace SolutionForest\OcppPhp\v201\Datatypes;

class ModemType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Wireless_ Communication_ Module. ICCID. CI20_ Text
	 * urn:x-oca:ocpp:uid:1:569327
	 * This contains the ICCID of the modem’s SIM card.
	 */
	public ?string $iccid = null;

	/**
	 * Wireless_ Communication_ Module. IMSI. CI20_ Text
	 * urn:x-oca:ocpp:uid:1:569328
	 * This contains the IMSI of the modem’s SIM card.
	 */
	public ?string $imsi = null;
}
