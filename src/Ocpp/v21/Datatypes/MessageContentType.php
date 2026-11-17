<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\MessageFormat;

class MessageContentType extends Datatype
{
	/**
	 * Format of the message.
	 */
	public string|MessageFormat $format;

	/**
	 * Message language identifier. Contains a language code as defined in <<ref-RFC5646,[RFC5646]>>.
	 */
	public ?string $language = null;

	/**
	 * *(2.1)* Required. Message contents. +
	 * Maximum length supported by Charging Station is given in OCPPCommCtrlr.FieldLength["MessageContentType.content"].
	 *     Maximum length defaults to 1024.
	 */
	public string $content;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
