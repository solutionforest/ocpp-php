<?php

namespace SolutionForest\OocpPhp\v201\CallResults;

abstract class NotifyEVChargingNeeds
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Returns whether the CSMS has been able to process the message successfully. It does not imply that the evChargingNeeds can be met with the current charging profile.
	 */
	public string|\SolutionForest\OocpPhp\v201\Enums\NotifyEVChargingNeedsStatus $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?array $statusInfo = null;
}
