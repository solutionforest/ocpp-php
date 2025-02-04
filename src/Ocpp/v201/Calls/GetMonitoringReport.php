<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;

class GetMonitoringReport extends Call
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData;
	public ?array $componentVariable;

	/**
	 * The Id of the request.
	 */
	public int $requestId;

	/**
	 * This field contains criteria for components for which a monitoring report is requested
	 */
	public ?array $monitoringCriteria;
}
