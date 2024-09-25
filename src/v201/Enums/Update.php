<?php

namespace SolutionForest\OocpPhp\Enums;

/**
 * Values of the Update field of a value in SendLocalListRequest.
 */
enum Update: string
{
	case Differential = 'Differential';
	case Full = 'Full';
}
