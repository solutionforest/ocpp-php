<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;
use SolutionForest\OcppPhp\Ocpp\v16\Enums\ChargingProfileKindType;
use SolutionForest\OcppPhp\Ocpp\v16\Enums\ChargingProfilePurposeType;
use SolutionForest\OcppPhp\Ocpp\v16\Enums\RecurrencyKindType;

class ChargingProfile extends Datatype
{
	public int $chargingProfileId;
	public ?int $transactionId = null;
	public int $stackLevel;
	public string|ChargingProfilePurposeType $chargingProfilePurpose;
	public string|ChargingProfileKindType $chargingProfileKind;
	public null|string|RecurrencyKindType $recurrencyKind = null;
	public ?string $validFrom = null;
	public ?string $validTo = null;
	public ChargingSchedule $chargingSchedule;
}
