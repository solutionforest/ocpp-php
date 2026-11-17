<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\ControlMode;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\EnergyTransferMode;
use SolutionForest\OcppPhp\Ocpp\v21\Enums\MobilityNeedsMode;

class ChargingNeedsType extends Datatype
{
	/**
	 * EV AC charging parameters for ISO 15118-2
	 */
	public ?ACChargingParametersType $acChargingParameters = null;

	/**
	 * *(2.1)* DERChargingParametersType is used in ChargingNeedsType during an ISO 15118-20 session for AC_BPT_DER to report the inverter settings related to DER control that were agreed between EVSE and EV.
	 *
	 * Fields starting with "ev" contain values from the EV.
	 * Other fields contain a value that is supported by both EV and EVSE.
	 *
	 * DERChargingParametersType type is only relevant in case of an ISO 15118-20 AC_BPT_DER/AC_DER charging session.
	 *
	 * NOTE: All these fields have values greater or equal to zero (i.e. are non-negative)
	 */
	public ?DERChargingParametersType $derChargingParameters = null;

	/**
	 * *(2.1)* A schedule of the energy amount over time that EV is willing to discharge. A negative value indicates the willingness to discharge under specific conditions, a positive value indicates that the EV currently is not able to offer energy to discharge.
	 */
	public ?EVEnergyOfferType $evEnergyOffer = null;

	/**
	 * Mode of energy transfer requested by the EV.
	 */
	public string|EnergyTransferMode $requestedEnergyTransfer;

	/**
	 * EV DC charging parameters for ISO 15118-2
	 */
	public ?DCChargingParametersType $dcChargingParameters = null;

	/**
	 * Charging parameters for ISO 15118-20, also supporting V2X charging/discharging.+
	 * All values are greater or equal to zero, with the exception of EVMinEnergyRequest, EVMaxEnergyRequest, EVTargetEnergyRequest, EVMinV2XEnergyRequest and EVMaxV2XEnergyRequest.
	 */
	public ?V2XChargingParametersType $v2xChargingParameters = null;

	/**
	 * *(2.1)* Modes of energy transfer that are marked as available by EV.
	 */
	public ?array $availableEnergyTransfer = null;

	/**
	 * *(2.1)* Indicates whether EV wants to operate in Dynamic or Scheduled mode. When absent, Scheduled mode is assumed for backwards compatibility. +
	 * *ISO 15118-20:* +
	 * ServiceSelectionReq(SelectedEnergyTransferService)
	 */
	public null|string|ControlMode $controlMode = null;

	/**
	 * *(2.1)* Value of EVCC indicates that EV determines min/target SOC and departure time. +
	 * A value of EVCC_SECC indicates that charging station or CSMS may also update min/target SOC and departure time. +
	 * *ISO 15118-20:* +
	 * ServiceSelectionReq(SelectedEnergyTransferService)
	 */
	public null|string|MobilityNeedsMode $mobilityNeedsMode = null;

	/**
	 * Estimated departure time of the EV. +
	 * *ISO 15118-2:* AC/DC_EVChargeParameterType: DepartureTime +
	 * *ISO 15118-20:* Dynamic/Scheduled_SEReqControlModeType: DepartureTIme
	 */
	public ?string $departureTime = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
