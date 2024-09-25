<?php

namespace SolutionForest\OocpPhp\CallResults;

abstract class NotifyEVChargingSchedule
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Returns whether the CSMS has been able to process the message successfully. It does not imply any approval of the charging schedule.
	 */
	public string $status;

	/**
	 * Element providing more information about the status.
	 */
	public ?array $statusInfo = null;
}
