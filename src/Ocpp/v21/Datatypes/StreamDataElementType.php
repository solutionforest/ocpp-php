<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;

class StreamDataElementType extends Datatype
{
	/**
	 * Offset relative to _basetime_ of this message. _basetime_ + _t_ is timestamp of recorded value.
	 */
	public float $t;
	public string $v;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
