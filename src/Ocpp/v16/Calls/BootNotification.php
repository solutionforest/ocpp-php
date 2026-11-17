<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Calls;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;

class BootNotification extends Call
{
	public string $chargePointVendor;
	public string $chargePointModel;
	public ?string $chargePointSerialNumber = null;
	public ?string $chargeBoxSerialNumber = null;
	public ?string $firmwareVersion = null;
	public ?string $iccid = null;
	public ?string $imsi = null;
	public ?string $meterType = null;
	public ?string $meterSerialNumber = null;
}
