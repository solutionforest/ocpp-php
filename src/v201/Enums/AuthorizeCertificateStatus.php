<?php

namespace SolutionForest\OocpPhp\Enums;

/**
 * Values of the AuthorizeCertificateStatus field of a value in AuthorizeResponse.
 */
enum AuthorizeCertificateStatus: string
{
	case Accepted = 'Accepted';
	case SignatureError = 'SignatureError';
	case CertificateExpired = 'CertificateExpired';
	case CertificateRevoked = 'CertificateRevoked';
	case NoCertificateAvailable = 'NoCertificateAvailable';
	case CertChainError = 'CertChainError';
	case ContractCancelled = 'ContractCancelled';
}
