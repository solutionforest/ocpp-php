<?php

namespace SolutionForest\OocpPhp\Enums;

/**
 * Values of the Iso15118EVCertificateStatus field of a value in Get15118EVCertificateResponse.
 */
enum Iso15118EVCertificateStatus: string
{
	case Accepted = 'Accepted';
	case Failed = 'Failed';
}
