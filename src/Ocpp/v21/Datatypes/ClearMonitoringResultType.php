<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\ClearMonitoringStatus;

class ClearMonitoringResultType extends Datatype
{
	/**
	 * Result of the clear request for this monitor, identified by its Id.
	 */
	public string|ClearMonitoringStatus $status;

	/**
	 * Id of the monitor of which a clear was requested.
	 */
	public int $id;

	/**
	 * Element providing more information about the status.
	 */
	public ?StatusInfoType $statusInfo = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
