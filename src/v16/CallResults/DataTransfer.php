<?php

namespace SolutionForest\OcppPhp\CallResults;

abstract class DataTransfer
{
	public string $status;
	public ?string $data = null;
}
