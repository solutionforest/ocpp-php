<?php

namespace SolutionForest\OocpPhp\Enums;

/**
 * Values of the GenericStatus field of a value in SignCertificateResponse.
 */
enum GenericStatus: string
{
	case Accepted = 'Accepted';
	case Rejected = 'Rejected';
}
