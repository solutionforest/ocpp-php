<?php

namespace SolutionForest\OocpPhp\v16\Calls;

use SolutionForest\OocpPhp\Messages\Call;

class CancelReservation extends Call
{
	public int $reservationId;
}
