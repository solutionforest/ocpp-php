<?php

abstract class SendLocalList
{
	public int $listVersion;
	public ?array $localAuthorizationList = null;
	public string $updateType;
}
