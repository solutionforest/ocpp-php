<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;

class ConstantStreamDataType extends Datatype
{
	/**
	 * Uniquely identifies the stream
	 */
	public int $id;
	public PeriodicEventStreamParamsType $params;

	/**
	 * Id of monitor used to report his event. It can be a preconfigured or hardwired monitor.
	 */
	public int $variableMonitoringId;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
