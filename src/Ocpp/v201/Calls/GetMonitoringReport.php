<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Calls;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v201\Datatypes\ComponentVariableType;

class GetMonitoringReport extends Call
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;

	/** @var list<ComponentVariableType>|null */
	#[ListOf(ComponentVariableType::class)]
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
