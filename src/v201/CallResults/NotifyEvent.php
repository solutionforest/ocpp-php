<?php

namespace SolutionForest\OocpPhp\CallResults;

abstract class NotifyEvent
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;
}
