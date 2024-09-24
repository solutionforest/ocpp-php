<?php

namespace SolutionForest\OcppPhp\Enums;

/**
 * Values of the InstallCertificateStatusType field of a value in InstallCertificate.
 */
enum InstallCertificateStatusType
{
	case Accepted;
	case Failed;
	case Rejected;
}
