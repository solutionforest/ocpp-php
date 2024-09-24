<?php

namespace SolutionForest\OocpPhp\Enums;

/**
 * Values of the DeleteCertificateStatusType field of a value in DeleteCertificate.
 */
enum DeleteCertificateStatusType
{
	case Accepted;
	case Failed;
	case NotFound;
}
