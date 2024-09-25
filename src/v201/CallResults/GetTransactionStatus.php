<?php

namespace SolutionForest\OocpPhp\CallResults;

abstract class GetTransactionStatus
{
	public ?bool $ongoingIndicator = null;
	public bool $messagesInQueue;
}
