<?php

namespace SolutionForest\OocpPhp\v201\Enums;

/**
 * Values of the IdToken field of a value in AuthorizeRequest , AuthorizeResponse , CustomerInformationRequest , RequestStartTransactionRequest , ReserveNowRequest , SendLocalListRequest , TransactionEventRequest , TransactionEventResponse.
 */
enum IdToken: string
{
	case Central = 'Central';
	case eMAID = 'eMAID';
	case ISO14443 = 'ISO14443';
	case ISO15693 = 'ISO15693';
	case KeyCode = 'KeyCode';
	case Local = 'Local';
	case MacAddress = 'MacAddress';
	case NoAuthorization = 'NoAuthorization';
}
