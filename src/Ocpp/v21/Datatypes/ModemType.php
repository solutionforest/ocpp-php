<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;

class ModemType extends Datatype
{
	/**
	 * This contains the ICCID of the modem’s SIM card.
	 */
	public ?string $iccid = null;

	/**
	 * This contains the IMSI of the modem’s SIM card.
	 */
	public ?string $imsi = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
