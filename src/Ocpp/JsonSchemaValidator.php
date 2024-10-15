<?php

namespace SolutionForest\OcppPhp\Ocpp;

use SolutionForest\OcppPhp\Ocpp\Messages\Call;
use SolutionForest\OcppPhp\Ocpp\Messages\CallResult;

class JsonSchemaValidator
{
    public static function validate(Call|CallResult $message, string $version): bool
    {
        $registry = new JsonSchemaRegistry();
        $schema = $registry->getSchema($message, $version);
        $payload = $message->getPayload();

        $validator = new \JsonSchema\Validator();
        $validator->validate($payload, $schema);


        if (!$validator->isValid()) {
            foreach ($validator->getErrors() as $error) {
                switch ($error['constraint']) {
                    case 'type':
                        throw new \Exception("TypeConstraintViolationError: " . $error['message']);
                    case 'additionalProperties':
                        throw new \Exception("FormatViolationError: " . $error['message']);
                    case 'required':
                        throw new \Exception("ProtocolError: " . $error['message']);
                    case 'maxLength':
                        throw new \Exception("TypeConstraintViolationError: " . $error['message']);
                    default:
                        $name = $error['property'];
                        throw new \Exception("FormatViolationError: Payload {$name} is not valid: " . $error['message']);
                }
            }
        }

        return $validator->isValid();
    }
}
