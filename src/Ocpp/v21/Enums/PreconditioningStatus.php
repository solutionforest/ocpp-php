<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the PreconditioningStatus field of a value in TransactionEventRequest.
 */
enum PreconditioningStatus: string
{
	case Unknown = 'Unknown';
	case Ready = 'Ready';
	case NotReady = 'NotReady';
	case Preconditioning = 'Preconditioning';
}
