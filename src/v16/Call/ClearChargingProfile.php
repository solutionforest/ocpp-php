<?php

abstract class ClearChargingProfile
{
	public ?int $id = null;
	public ?int $connectorId = null;
	public ?string $chargingProfilePurpose = null;
	public ?int $stackLevel = null;
}
