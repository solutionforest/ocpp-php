<?php

namespace SolutionForest\OocpPhp\v201\Datatypes;

abstract class MessageContentType
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;

	/**
	 * Message_ Content. Format. Message_ Format_ Code
	 * urn:x-enexis:ecdm:uid:1:570848
	 * Format of the message.
	 */
	public null|string|\SolutionForest\OocpPhp\v201\Enums\MessageFormat $format = null;

	/**
	 * Message_ Content. Language. Language_ Code
	 * urn:x-enexis:ecdm:uid:1:570849
	 * Message language identifier. Contains a language code as defined in <<ref-RFC5646,[RFC5646]>>.
	 */
	public ?string $language = null;

	/**
	 * Message_ Content. Content. Message
	 * urn:x-enexis:ecdm:uid:1:570852
	 * Message contents.
	 */
	public ?string $content = null;
}
