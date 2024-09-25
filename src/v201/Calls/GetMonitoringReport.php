<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class GetMonitoringReport
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;
	public ?array $componentVariable = null;

	/**
	 * The Id of the request.
	 */
	public int $requestId;

	/**
	 * This field contains criteria for components for which a monitoring report is requested
	 */
	public ?array $monitoringCriteria = null;
}
