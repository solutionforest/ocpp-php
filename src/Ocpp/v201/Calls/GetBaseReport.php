<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v201\Enums\ReportBase;

class GetBaseReport extends Call
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData;

	/**
	 * The Id of the request.
	 */
	public int $requestId;

	/**
	 * This field specifies the report base.
	 */
	public string|ReportBase $reportBase;
}
