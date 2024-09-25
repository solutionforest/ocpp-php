<?php

namespace SolutionForest\OocpPhp\Calls;

abstract class Authorize
{
	public array $idToken;
	public ?string $certificate = null;
	public ?array $iso15118CertificateHashData = null;
}
