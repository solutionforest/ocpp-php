<?php

namespace SolutionForest\OocpPhp\Enums;

/**
 * Values of the Reset field of a value in ResetRequest.
 */
enum Reset: string
{
	case Immediate = 'Immediate';
	case OnIdle = 'OnIdle';
}
