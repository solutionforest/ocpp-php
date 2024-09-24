<?php

abstract class GetCompositeSchedule
{
	public int $connectorId;
	public int $duration;
	public ?string $chargingRateUnit = null;
}
