<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Enums;

/**
 * Values of the Data field of a value in NotifyReportRequest.
 */
enum Data: string
{
	case string = 'string';
	case decimal = 'decimal';
	case integer = 'integer';
	case dateTime = 'dateTime';
	case boolean = 'boolean';
	case OptionList = 'OptionList';
	case SequenceList = 'SequenceList';
	case MemberList = 'MemberList';
}
