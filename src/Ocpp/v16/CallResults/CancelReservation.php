<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\CallResults;

use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;
use SolutionForest\OcppPhp\Ocpp\v16\Enums\CancelReservationStatus;

class CancelReservation extends CallResult
{
	public string|CancelReservationStatus $status;
}
