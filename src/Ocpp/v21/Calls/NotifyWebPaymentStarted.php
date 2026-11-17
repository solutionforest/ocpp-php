<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;

class NotifyWebPaymentStarted extends Call
{
	/**
	 * EVSE id for which transaction is requested.
	 */
	public int $evseId;

	/**
	 * Timeout value in seconds after which no result of web payment process (e.g. QR code scanning) is to be expected anymore.
	 */
	public int $timeout;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
