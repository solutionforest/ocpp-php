<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;

class NotifyMonitoringReport extends Call
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData;
	public ?array $monitor;

	/**
	 * The id of the GetMonitoringRequest that requested this report.
	 */
	public int $requestId;

	/**
	 * “to be continued” indicator. Indicates whether another part of the monitoringData follows in an upcoming notifyMonitoringReportRequest message. Default value when omitted is false.
	 */
	public ?bool $tbc;

	/**
	 * Sequence number of this message. First message starts at 0.
	 */
	public int $seqNo;

	/**
	 * Timestamp of the moment this message was generated at the Charging Station.
	 */
	public string $generatedAt;
}
