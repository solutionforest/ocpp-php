<?php

namespace SolutionForest\OocpPhp\v201\Calls;

abstract class CustomerInformation
{
	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?array $customData = null;
	public ?array $customerCertificate = null;

	/**
	 * Contains a case insensitive identifier to use for the authorization and the type of authorization to support multiple forms of identifiers.
	 */
	public ?array $idToken = null;

	/**
	 * The Id of the request.
	 */
	public int $requestId;

	/**
	 * Flag indicating whether the Charging Station should return NotifyCustomerInformationRequest messages containing information about the customer referred to.
	 */
	public bool $report;

	/**
	 * Flag indicating whether the Charging Station should clear all information about the customer referred to.
	 */
	public bool $clear;

	/**
	 * A (e.g. vendor specific) identifier of the customer this request refers to. This field contains a custom identifier other than IdToken and Certificate.
	 * One of the possible identifiers (customerIdentifier, customerIdToken or customerCertificate) should be in the request message.
	 */
	public ?string $customerIdentifier = null;
}
