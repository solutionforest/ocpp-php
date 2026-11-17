<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;

class PeriodicEventStreamParamsType extends Datatype
{
	/**
	 * Time in seconds after which stream data is sent.
	 */
	public ?int $interval = null;

	/**
	 * Number of items to be sent together in stream.
	 */
	public ?int $values = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
