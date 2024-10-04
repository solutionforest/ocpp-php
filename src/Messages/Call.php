<?php

namespace SolutionForest\OcppPhp\Messages;

use Ramsey\Uuid\Uuid;

abstract class Call extends Message
{
    public int $messageTypeID = 2;

    public function __construct()
    {
        $this->messageId = Uuid::uuid4()->toString();
    }

    public function toArray(): array
    {
        $array = parent::toArray();
        $array['action'] = (new \ReflectionClass($this))->getShortName();

        return $array;
    }
}
