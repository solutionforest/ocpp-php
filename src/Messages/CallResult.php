<?php

namespace SolutionForest\OcppPhp\Messages;

abstract class CallResult extends Message
{
    public int $messageTypeID = 3;

    public function __construct(string $messageId)
    {
        $this->messageId = $messageId;
    }
}
