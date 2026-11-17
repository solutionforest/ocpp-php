<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Calls;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\CostDetailsType;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\EVSEType;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\IdTokenType;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\MeterValueType;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\TransactionType;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\PreconditioningStatus;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\TransactionEvent as TransactionEventEnum;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\TriggerReason;

class TransactionEvent extends Call
{
	/**
	 * CostDetailsType contains the cost as calculated by Charging Station based on provided TariffType.
	 *
	 * NOTE: Reservation is not shown as a _chargingPeriod_, because it took place outside of the transaction.
	 */
	public ?CostDetailsType $costDetails = null;

	/**
	 * This contains the type of this event.
	 * The first TransactionEvent of a transaction SHALL contain: "Started" The last TransactionEvent of a transaction SHALL contain: "Ended" All others SHALL contain: "Updated"
	 */
	public string|TransactionEventEnum $eventType;

	/** @var list<MeterValueType>|null */
	#[ListOf(MeterValueType::class)]
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
	 * If the Charging Station is able to report the number of phases used, then it SHALL provide it.
	 * When omitted the CSMS may be able to determine the number of phases used as follows: +
	 * 1: The numberPhases in the currently used ChargingSchedule. +
	 * 2: The number of phases provided via device management.
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
	 * *(2.1)* The current preconditioning status of the BMS in the EV. Default value is Unknown.
	 */
	public null|string|PreconditioningStatus $preconditioningStatus = null;

	/**
	 * *(2.1)* True when EVSE electronics are in sleep mode for this transaction. Default value (when absent) is false.
	 */
	public ?bool $evseSleep = null;
	public TransactionType $transactionInfo;

	/**
	 * Electric Vehicle Supply Equipment
	 */
	public ?EVSEType $evse = null;

	/**
	 * Contains a case insensitive identifier to use for the authorization and the type of authorization to support multiple forms of identifiers.
	 */
	public ?IdTokenType $idToken = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
