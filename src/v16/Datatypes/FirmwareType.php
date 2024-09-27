<?php

namespace SolutionForest\OocpPhp\v16\Datatypes;

abstract class FirmwareType
{
	public ?string $location = null;
	public ?string $retrieveDateTime = null;
	public ?string $installDateTime = null;
	public ?string $signingCertificate = null;
	public ?string $signature = null;
}
