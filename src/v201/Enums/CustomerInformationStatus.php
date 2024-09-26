<?php

namespace SolutionForest\OocpPhp\v201\Enums;

/**
 * Values of the CustomerInformationStatus field of a value in CustomerInformationResponse.
 */
enum CustomerInformationStatus: string
{
	case Accepted = 'Accepted';
	case Rejected = 'Rejected';
	case Invalid = 'Invalid';
}
