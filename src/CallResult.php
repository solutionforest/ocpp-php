<?php

namespace SolutionForest\OocpPhp;

abstract class CallResult extends Message
{
    public int $messageTypeID = 3;

    public function __construct($messageId)
    {
        $this->messageId = $messageId;
    }
}
