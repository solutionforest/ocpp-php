<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Enums;

/**
 * Values of the Mutability field of a value in NotifyReportRequest.
 */
enum Mutability: string
{
	case ReadOnly = 'ReadOnly';
	case WriteOnly = 'WriteOnly';
	case ReadWrite = 'ReadWrite';
}
