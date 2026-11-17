<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Calls;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\ComponentVariableType;

class GetReport extends Call
{
	/** @var list<ComponentVariableType>|null */
	#[ListOf(ComponentVariableType::class)]
	public ?array $componentVariable = null;

	/**
	 * The Id of the request.
	 */
	public int $requestId;

	/**
	 * This field contains criteria for components for which a report is requested
	 */
	public ?array $componentCriteria = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
