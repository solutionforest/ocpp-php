<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Calls;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Messages\Send;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\StreamDataElementType;

class NotifyPeriodicEventStream extends Send
{
	/** @var list<StreamDataElementType> */
	#[ListOf(StreamDataElementType::class)]
	public array $data;

	/**
	 * Id of stream.
	 */
	public int $id;

	/**
	 * Number of data elements still pending to be sent.
	 */
	public int $pending;

	/**
	 * Base timestamp to add to time offset of values.
	 */
	public string $basetime;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
