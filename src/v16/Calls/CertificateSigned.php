<?php

namespace SolutionForest\OcppPhp\v16\Calls;

use SolutionForest\OcppPhp\Messages\Call;

class CertificateSigned extends Call
{
	public string $certificateChain;
}
