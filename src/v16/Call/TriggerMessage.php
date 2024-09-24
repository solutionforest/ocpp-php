<?php

abstract class TriggerMessage
{
	public string $requestedMessage;
	public ?int $connectorId = null;
}
