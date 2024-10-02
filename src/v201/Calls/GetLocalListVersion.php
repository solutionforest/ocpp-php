<?php

namespace SolutionForest\OocpPhp\v201\Calls;

use SolutionForest\OocpPhp\Messages\Call;

class GetLocalListVersion extends Call
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;
}
