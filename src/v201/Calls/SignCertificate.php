<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class SignCertificate
{
	public string $csr;
	public ?string $certificateType = null;
}
