<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class CertificateSigned
{
	public string $certificateChain;
	public ?string $certificateType = null;
}
