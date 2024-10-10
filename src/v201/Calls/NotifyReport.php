<?php

namespace SolutionForest\OcppPhp\v201\Calls;

use SolutionForest\OcppPhp\Messages\Call;

class NotifyReport extends Call
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData;

	/**
	 * The id of the GetReportRequest  or GetBaseReportRequest that requested this report
	 */
	public int $requestId;

	/**
	 * Timestamp of the moment this message was generated at the Charging Station.
	 */
	public string $generatedAt;
	public ?array $reportData;

	/**
	 * “to be continued” indicator. Indicates whether another part of the report follows in an upcoming notifyReportRequest message. Default value when omitted is false.
	 */
	public ?bool $tbc;

	/**
	 * Sequence number of this message. First message starts at 0.
	 */
	public int $seqNo;
}
