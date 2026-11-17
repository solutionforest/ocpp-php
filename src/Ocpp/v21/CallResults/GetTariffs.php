<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\CallResults;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\StatusInfoType;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\TariffAssignmentType;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\TariffGetStatus;

class GetTariffs extends CallResult
{
	/**
	 * Status of operation
	 */
	public string|TariffGetStatus $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?StatusInfoType $statusInfo = null;

	/** @var list<TariffAssignmentType>|null */
	#[ListOf(TariffAssignmentType::class)]
	public ?array $tariffAssignments = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
