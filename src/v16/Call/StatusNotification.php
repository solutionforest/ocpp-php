<?php

abstract class StatusNotification
{
	public int $connectorId;
	public string $errorCode;
	public ?string $info = null;
	public string $status;
	public ?string $timestamp = null;
	public ?string $vendorId = null;
	public ?string $vendorErrorCode = null;
}
