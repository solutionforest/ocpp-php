<?php

namespace SolutionForest\OocpPhp\v16\Enums;

/**
 * Values of the InstallCertificateStatus field of a value in InstallCertificateResponse.
 */
enum InstallCertificateStatus: string
{
	case Accepted = 'Accepted';
	case Failed = 'Failed';
	case Rejected = 'Rejected';
}
