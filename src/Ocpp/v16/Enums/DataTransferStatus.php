<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Enums;

/**
 * Values of the DataTransferStatus field of a value in DataTransferResponse.
 */
enum DataTransferStatus: string
{
	case Accepted = 'Accepted';
	case Rejected = 'Rejected';
	case UnknownMessageId = 'UnknownMessageId';
	case UnknownVendorId = 'UnknownVendorId';
}
