<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\TariffClearStatus;

class ClearTariffsResultType extends Datatype
{
	/**
	 * Element providing more information about the status.
	 */
	public ?StatusInfoType $statusInfo = null;

	/**
	 * Id of tariff for which _status_ is reported. If no tariffs were found, then this field is absent, and _status_ will be `NoTariff`.
	 */
	public ?string $tariffId = null;
	public string|TariffClearStatus $status;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
