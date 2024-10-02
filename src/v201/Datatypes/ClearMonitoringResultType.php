<?php

namespace SolutionForest\OocpPhp\v201\Datatypes;

use SolutionForest\OocpPhp\v201\Enums\ClearMonitoringStatus;

class ClearMonitoringResultType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

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
	public ?array $statusInfo = null;
}
