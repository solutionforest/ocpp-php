<?php

namespace SolutionForest\OocpPhp\v16\Datatypes;

class FirmwareType
{
	public string $location;
	public string $retrieveDateTime;
	public ?string $installDateTime = null;
	public string $signingCertificate;
	public string $signature;
}
