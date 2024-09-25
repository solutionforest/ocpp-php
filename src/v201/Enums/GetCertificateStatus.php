<?php

namespace SolutionForest\OocpPhp\Enums;

/**
 * Values of the GetCertificateStatus field of a value in GetCertificateStatusResponse.
 */
enum GetCertificateStatus: string
{
	case Accepted = 'Accepted';
	case Failed = 'Failed';
}
