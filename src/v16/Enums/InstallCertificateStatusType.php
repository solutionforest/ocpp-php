<?php

namespace SolutionForest\OocpPhp\Enums;

/**
 * Values of the InstallCertificateStatusType field of a value in InstallCertificate.
 */
enum InstallCertificateStatusType
{
	case Accepted;
	case Failed;
	case Rejected;
}
