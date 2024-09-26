<?php

namespace SolutionForest\OocpPhp\v201\Calls;

abstract class NotifyReport
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * The id of the GetReportRequest  or GetBaseReportRequest that requested this report
	 */
	public int $requestId;

	/**
	 * Timestamp of the moment this message was generated at the Charging Station.
	 */
	public string $generatedAt;
	public ?array $reportData = null;

	/**
	 * “to be continued” indicator. Indicates whether another part of the report follows in an upcoming notifyReportRequest message. Default value when omitted is false.
	 */
	public ?bool $tbc = null;

	/**
	 * Sequence number of this message. First message starts at 0.
	 */
	public int $seqNo;
}
