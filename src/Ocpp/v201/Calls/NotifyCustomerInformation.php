<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;

class NotifyCustomerInformation extends Call
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData;

	/**
	 * (Part of) the requested data. No format specified in which the data is returned. Should be human readable.
	 */
	public string $data;

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

	/**
	 * The Id of the request.
	 */
	public int $requestId;
}
