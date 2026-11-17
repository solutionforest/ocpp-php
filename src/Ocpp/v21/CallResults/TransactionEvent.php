<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\CallResults;

use SolutionForest\OcppPhp\Ocpp\Attributes\ListOf;
use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\IdTokenInfoType;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\MessageContentType;
use SolutionForest\OcppPhp\Ocpp\v21\Datatypes\TransactionLimitType;

class TransactionEvent extends CallResult
{
	/**
	 * When _eventType_ of TransactionEventRequest is Updated, then this value contains the running cost. When _eventType_ of TransactionEventRequest is Ended, then this contains the final total cost of this transaction, including taxes, in the currency configured with the Configuration Variable: Currency. Absence of this value does not imply that the transaction was free. To indicate a free transaction, the CSMS SHALL send a value of 0.00.
	 */
	public ?float $totalCost = null;

	/**
	 * Priority from a business point of view. Default priority is 0, The range is from -9 to 9. Higher values indicate a higher priority. The chargingPriority in <<transactioneventresponse,TransactionEventResponse>> is temporarily, so it may not be set in the <<cmn_idtokeninfotype,IdTokenInfoType>> afterwards. Also the chargingPriority in <<transactioneventresponse,TransactionEventResponse>> has a higher priority than the one in <<cmn_idtokeninfotype,IdTokenInfoType>>.
	 */
	public ?int $chargingPriority = null;

	/**
	 * Contains status information about an identifier.
	 * It is advised to not stop charging for a token that expires during charging, as ExpiryDate is only used for caching purposes. If ExpiryDate is not given, the status has no end date.
	 */
	public ?IdTokenInfoType $idTokenInfo = null;

	/**
	 * Cost, energy, time or SoC limit for a transaction.
	 */
	public ?TransactionLimitType $transactionLimit = null;

	/**
	 * Contains message details, for a message to be displayed on a Charging Station.
	 */
	public ?MessageContentType $updatedPersonalMessage = null;

	/** @var list<MessageContentType>|null */
	#[ListOf(MessageContentType::class)]
	public ?array $updatedPersonalMessageExtra = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
