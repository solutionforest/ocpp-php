<?php

namespace SolutionForest\OcppPhp\v201\Enums;

/**
 * Values of the InstallCertificateStatus field of a value in InstallCertificateResponse.
 */
enum InstallCertificateStatus: string
{
	case Accepted = 'Accepted';
	case Rejected = 'Rejected';
	case Failed = 'Failed';
}
