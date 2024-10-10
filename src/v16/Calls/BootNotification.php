<?php

namespace SolutionForest\OcppPhp\v16\Calls;

use SolutionForest\OcppPhp\Messages\Call;

class BootNotification extends Call
{
	public string $chargePointVendor;
	public string $chargePointModel;
	public ?string $chargePointSerialNumber;
	public ?string $chargeBoxSerialNumber;
	public ?string $firmwareVersion;
	public ?string $iccid;
	public ?string $imsi;
	public ?string $meterType;
	public ?string $meterSerialNumber;
}
