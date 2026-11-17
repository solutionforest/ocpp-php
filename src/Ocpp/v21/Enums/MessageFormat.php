<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the MessageFormat field of a value in AuthorizeResponse , ChangeTransactionTariffRequest , NotifyDisplayMessagesRequest , SendLocalListRequest , SetDefaultTariffRequest , SetDisplayMessageRequest , TransactionEventResponse.
 */
enum MessageFormat: string
{
	case ASCII = 'ASCII';
	case HTML = 'HTML';
	case URI = 'URI';
	case UTF8 = 'UTF8';
	case QRCODE = 'QRCODE';
}
