<?php

namespace SolutionForest\OcppPhp\v16\Calls;

use SolutionForest\OcppPhp\Messages\Call;

class CancelReservation extends Call
{
	public int $reservationId;
}
