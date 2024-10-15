<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;

class DeleteCertificate extends Call
{
	public object $certificateHashData;
}
