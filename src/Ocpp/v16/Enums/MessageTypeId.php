<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Enums;

/**
 * Values of the MessageTrigger field of a value in ExtendedTriggerMessage.
 */
enum MessageTypeId: int
{
    case Call = 2;
    case CallResult = 3;
    case CallError = 4;
}
