<?php

abstract class RemoteStartTransaction
{
	public ?int $connectorId = null;
	public string $idTag;
	public ?array $chargingProfile = null;
}
