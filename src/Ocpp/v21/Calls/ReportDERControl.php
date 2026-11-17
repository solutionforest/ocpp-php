<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Calls;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\DERCurveGetType;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\EnterServiceGetType;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\FixedPFGetType;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\FixedVarGetType;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\FreqDroopGetType;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\GradientGetType;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\LimitMaxDischargeGetType;

class ReportDERControl extends Call
{
	/** @var list<DERCurveGetType>|null */
	#[ListOf(DERCurveGetType::class)]
	public ?array $curve = null;

	/** @var list<EnterServiceGetType>|null */
	#[ListOf(EnterServiceGetType::class)]
	public ?array $enterService = null;

	/** @var list<FixedPFGetType>|null */
	#[ListOf(FixedPFGetType::class)]
	public ?array $fixedPFAbsorb = null;

	/** @var list<FixedPFGetType>|null */
	#[ListOf(FixedPFGetType::class)]
	public ?array $fixedPFInject = null;

	/** @var list<FixedVarGetType>|null */
	#[ListOf(FixedVarGetType::class)]
	public ?array $fixedVar = null;

	/** @var list<FreqDroopGetType>|null */
	#[ListOf(FreqDroopGetType::class)]
	public ?array $freqDroop = null;

	/** @var list<GradientGetType>|null */
	#[ListOf(GradientGetType::class)]
	public ?array $gradient = null;

	/** @var list<LimitMaxDischargeGetType>|null */
	#[ListOf(LimitMaxDischargeGetType::class)]
	public ?array $limitMaxDischarge = null;

	/**
	 * RequestId from GetDERControlRequest.
	 */
	public int $requestId;

	/**
	 * To Be Continued. Default value when omitted: false. +
	 * False indicates that there are no further messages as part of this report.
	 */
	public ?bool $tbc = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
