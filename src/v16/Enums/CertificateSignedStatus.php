<?php

namespace SolutionForest\OocpPhp\v16\Enums;

/**
 * Values of the CertificateSignedStatus field of a value in CertificateSignedResponse.
 */
enum CertificateSignedStatus: string
{
	case Accepted = 'Accepted';
	case Rejected = 'Rejected';
}
