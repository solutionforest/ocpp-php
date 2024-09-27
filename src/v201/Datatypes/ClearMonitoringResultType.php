<?php

namespace SolutionForest\OocpPhp\v201\Datatypes;

abstract class ClearMonitoringResultType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Result of the clear request for this monitor, identified by its Id.
	 */
	public null|string|\SolutionForest\OocpPhp\v201\Enums\ClearMonitoringStatus $status = null;

	/**
	 * Id of the monitor of which a clear was requested.
	 */
	public ?int $id = null;

	/**
	 * Element providing more information about the status.
	 */
	public ?array $statusInfo = null;
}
