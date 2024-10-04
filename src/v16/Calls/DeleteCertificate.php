<?php

namespace SolutionForest\OcppPhp\v16\Calls;

use SolutionForest\OcppPhp\Messages\Call;

class DeleteCertificate extends Call
{
	public array $certificateHashData;
}
