<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;

class V2XChargingParametersType extends Datatype
{
	/**
	 * Minimum charge power in W, defined by max(EV, EVSE).
	 * This field represents the sum of all phases, unless values are provided for L2 and L3, in which case this field represents phase L1.
	 * Relates to:
	 * *ISO 15118-20*: BPT_AC/DC_CPDReqEnergyTransferModeType: EVMinimumChargePower
	 */
	public ?float $minChargePower = null;

	/**
	 * Minimum charge power on phase L2 in W, defined by max(EV, EVSE).
	 * Relates to:
	 * *ISO 15118-20*: BPT_AC/DC_CPDReqEnergyTransferModeType: EVMinimumChargePower_L2
	 */
	public ?float $minChargePower_L2 = null;

	/**
	 * Minimum charge power on phase L3 in W, defined by max(EV, EVSE).
	 * Relates to:
	 * *ISO 15118-20*: BPT_AC/DC_CPDReqEnergyTransferModeType: EVMinimumChargePower_L3
	 */
	public ?float $minChargePower_L3 = null;

	/**
	 * Maximum charge (absorbed) power in W, defined by min(EV, EVSE) at unity power factor. +
	 * This field represents the sum of all phases, unless values are provided for L2 and L3, in which case this field represents phase L1.
	 * It corresponds to the ChaWMax attribute in the IEC 61850.
	 * It is usually equivalent to the rated apparent power of the EV when discharging (ChaVAMax) in IEC 61850. +
	 *
	 * Relates to:
	 * *ISO 15118-20*: BPT_AC/DC_CPDReqEnergyTransferModeType: EVMaximumChargePower
	 */
	public ?float $maxChargePower = null;

	/**
	 * Maximum charge power on phase L2 in W, defined by min(EV, EVSE)
	 * Relates to:
	 * *ISO 15118-20*: BPT_AC/DC_CPDReqEnergyTransferModeType: EVMaximumChargePower_L2
	 */
	public ?float $maxChargePower_L2 = null;

	/**
	 * Maximum charge power on phase L3 in W, defined by min(EV, EVSE)
	 * Relates to:
	 * *ISO 15118-20*: BPT_AC/DC_CPDReqEnergyTransferModeType: EVMaximumChargePower_L3
	 */
	public ?float $maxChargePower_L3 = null;

	/**
	 * Minimum discharge (injected) power in W, defined by max(EV, EVSE) at unity power factor. Value >= 0. +
	 * This field represents the sum of all phases, unless values are provided for L2 and L3, in which case this field represents phase L1. +
	 * It corresponds to the WMax attribute in the IEC 61850.
	 * It is usually equivalent to the rated apparent power of the EV when discharging (VAMax attribute in the IEC 61850).
	 *
	 * Relates to:
	 * *ISO 15118-20*: BPT_AC/DC_CPDReqEnergyTransferModeType: EVMinimumDischargePower
	 */
	public ?float $minDischargePower = null;

	/**
	 * Minimum discharge power on phase L2 in W, defined by max(EV, EVSE).  Value >= 0.
	 * Relates to:
	 * *ISO 15118-20*: BPT_AC/DC_CPDReqEnergyTransferModeType: EVMinimumDischargePower_L2
	 */
	public ?float $minDischargePower_L2 = null;

	/**
	 * Minimum discharge power on phase L3 in W, defined by max(EV, EVSE).  Value >= 0.
	 * Relates to:
	 * *ISO 15118-20*: BPT_AC/DC_CPDReqEnergyTransferModeType: EVMinimumDischargePower_L3
	 */
	public ?float $minDischargePower_L3 = null;

	/**
	 * Maximum discharge (injected) power in W, defined by min(EV, EVSE) at unity power factor.  Value >= 0.
	 * This field represents the sum of all phases, unless values are provided for L2 and L3, in which case this field represents phase L1.
	 * Relates to:
	 * *ISO 15118-20*: BPT_AC/DC_CPDReqEnergyTransferModeType: EVMaximumDischargePower
	 */
	public ?float $maxDischargePower = null;

	/**
	 * Maximum discharge power on phase L2 in W, defined by min(EV, EVSE).  Value >= 0.
	 * Relates to:
	 * *ISO 15118-20*: BPT_AC/DC_CPDReqEnergyTransferModeType: EVMaximumDischargePowe_L2
	 */
	public ?float $maxDischargePower_L2 = null;

	/**
	 * Maximum discharge power on phase L3 in W, defined by min(EV, EVSE).  Value >= 0.
	 * Relates to:
	 * *ISO 15118-20*: BPT_AC/DC_CPDReqEnergyTransferModeType: EVMaximumDischargePower_L3
	 */
	public ?float $maxDischargePower_L3 = null;

	/**
	 * Minimum charge current in A, defined by max(EV, EVSE)
	 * Relates to:
	 * *ISO 15118-20*: BPT_DC_CPDReqEnergyTransferModeType: EVMinimumChargeCurrent
	 */
	public ?float $minChargeCurrent = null;

	/**
	 * Maximum charge current in A, defined by min(EV, EVSE)
	 * Relates to:
	 * *ISO 15118-20*: BPT_DC_CPDReqEnergyTransferModeType: EVMaximumChargeCurrent
	 */
	public ?float $maxChargeCurrent = null;

	/**
	 * Minimum discharge current in A, defined by max(EV, EVSE).  Value >= 0.
	 * Relates to:
	 * *ISO 15118-20*: BPT_DC_CPDReqEnergyTransferModeType: EVMinimumDischargeCurrent
	 */
	public ?float $minDischargeCurrent = null;

	/**
	 * Maximum discharge current in A, defined by min(EV, EVSE).  Value >= 0.
	 * Relates to:
	 * *ISO 15118-20*: BPT_DC_CPDReqEnergyTransferModeType: EVMaximumDischargeCurrent
	 */
	public ?float $maxDischargeCurrent = null;

	/**
	 * Minimum voltage in V, defined by max(EV, EVSE)
	 * Relates to:
	 * *ISO 15118-20*: BPT_DC_CPDReqEnergyTransferModeType: EVMinimumVoltage
	 */
	public ?float $minVoltage = null;

	/**
	 * Maximum voltage in V, defined by min(EV, EVSE)
	 * Relates to:
	 * *ISO 15118-20*: BPT_DC_CPDReqEnergyTransferModeType: EVMaximumVoltage
	 */
	public ?float $maxVoltage = null;

	/**
	 * Energy to requested state of charge in Wh
	 * Relates to:
	 * *ISO 15118-20*: Dynamic/Scheduled_SEReqControlModeType: EVTargetEnergyRequest
	 */
	public ?float $evTargetEnergyRequest = null;

	/**
	 * Energy to minimum allowed state of charge in Wh
	 * Relates to:
	 * *ISO 15118-20*: Dynamic/Scheduled_SEReqControlModeType: EVMinimumEnergyRequest
	 */
	public ?float $evMinEnergyRequest = null;

	/**
	 * Energy to maximum state of charge in Wh
	 * Relates to:
	 * *ISO 15118-20*: Dynamic/Scheduled_SEReqControlModeType: EVMaximumEnergyRequest
	 */
	public ?float $evMaxEnergyRequest = null;

	/**
	 * Energy (in Wh) to minimum state of charge for cycling (V2X) activity.
	 * Positive value means that current state of charge is below V2X range.
	 * Relates to:
	 * *ISO 15118-20*: Dynamic_SEReqControlModeType: EVMinimumV2XEnergyRequest
	 */
	public ?float $evMinV2XEnergyRequest = null;

	/**
	 * Energy (in Wh) to maximum state of charge for cycling (V2X) activity.
	 * Negative value indicates that current state of charge is above V2X range.
	 * Relates to:
	 * *ISO 15118-20*: Dynamic_SEReqControlModeType: EVMaximumV2XEnergyRequest
	 */
	public ?float $evMaxV2XEnergyRequest = null;

	/**
	 * Target state of charge at departure as percentage.
	 * Relates to:
	 * *ISO 15118-20*: BPT_DC_CPDReqEnergyTransferModeType: TargetSOC
	 */
	public ?int $targetSoC = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
