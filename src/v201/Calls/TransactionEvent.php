<?php

namespace SolutionForest\OocpPhp\v201\Calls;

use SolutionForest\OocpPhp\Messages\Call;
use SolutionForest\OocpPhp\v201\Enums\TransactionEvent;
use SolutionForest\OocpPhp\v201\Enums\TriggerReason;

class TransactionEvent extends Call
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * This contains the type of this event.
	 * The first TransactionEvent of a transaction SHALL contain: "Started" The last TransactionEvent of a transaction SHALL contain: "Ended" All others SHALL contain: "Updated"
	 */
	public string|TransactionEvent $eventType;
	public ?array $meterValue = null;

	/**
	 * The date and time at which this transaction event occurred.
	 */
	public string $timestamp;

	/**
	 * Reason the Charging Station sends this message to the CSMS
	 */
	public string|TriggerReason $triggerReason;

	/**
	 * Incremental sequence number, helps with determining if all messages of a transaction have been received.
	 */
	public int $seqNo;

	/**
	 * Indication that this transaction event happened when the Charging Station was offline. Default = false, meaning: the event occurred when the Charging Station was online.
	 */
	public ?bool $offline = null;

	/**
	 * If the Charging Station is able to report the number of phases used, then it SHALL provide it. When omitted the CSMS may be able to determine the number of phases used via device management.
	 */
	public ?int $numberOfPhasesUsed = null;

	/**
	 * The maximum current of the connected cable in Ampere (A).
	 */
	public ?int $cableMaxCurrent = null;

	/**
	 * This contains the Id of the reservation that terminates as a result of this transaction.
	 */
	public ?int $reservationId = null;

	/**
	 * Transaction
	 * urn:x-oca:ocpp:uid:2:233318
	 */
	public array $transactionInfo;

	/**
	 * EVSE
	 * urn:x-oca:ocpp:uid:2:233123
	 * Electric Vehicle Supply Equipment
	 */
	public ?array $evse = null;

	/**
	 * Contains a case insensitive identifier to use for the authorization and the type of authorization to support multiple forms of identifiers.
	 */
	public ?array $idToken = null;
}
