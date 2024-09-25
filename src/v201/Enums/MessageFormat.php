<?php

namespace SolutionForest\OocpPhp\Enums;

/**
 * Values of the MessageFormat field of a value in AuthorizeResponse , NotifyDisplayMessagesRequest , SendLocalListRequest , SetDisplayMessageRequest , TransactionEventResponse.
 */
enum MessageFormat: string
{
	case ASCII = 'ASCII';
	case HTML = 'HTML';
	case URI = 'URI';
	case UTF8 = 'UTF8';
}
