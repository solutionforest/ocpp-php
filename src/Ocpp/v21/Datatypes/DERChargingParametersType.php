<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Datatypes;

use SolutionForest\OcppPhp\Ocpp\Datatype;

class DERChargingParametersType extends Datatype
{
	/**
	 * DER control functions supported by EV. +
	 *     *ISO 15118-20*: DER_BPT_AC_CPDReqEnergyTransferModeType:DERControlFunctions (bitmap)
	 */
	public ?array $evSupportedDERControl = null;

	/**
	 * Rated maximum injected active power by EV, at specified over-excited power factor (overExcitedPowerFactor). +
	 * It can also be defined as the rated maximum discharge power at the rated minimum injected reactive power value. This means that if the EV is providing reactive power support, and it is requested to discharge at max power (e.g. to satisfy an EMS request), the EV may override the request and discharge up to overExcitedMaximumDischargePower to meet the minimum reactive power requirements. +
	 * Corresponds to the WOvPF attribute in IEC 61850. +
	 *     *ISO 15118-20*: DER_BPT_AC_CPDReqEnergyTransferModeType: EVOverExcitedMaximumDischargePower
	 */
	public ?float $evOverExcitedMaxDischargePower = null;

	/**
	 * EV power factor when injecting (over excited) the minimum reactive power. +
	 * Corresponds to the OvPF attribute in IEC 61850. +
	 *     *ISO 15118-20*: DER_BPT_AC_CPDReqEnergyTransferModeType: EVOverExcitedPowerFactor
	 */
	public ?float $evOverExcitedPowerFactor = null;

	/**
	 * Rated maximum injected active power by EV supported at specified under-excited power factor (EVUnderExcitedPowerFactor). +
	 * It can also be defined as the rated maximum dischargePower at the rated minimum absorbed reactive power value.
	 * This means that if the EV is providing reactive power support, and it is requested to discharge at max power (e.g. to satisfy an EMS request), the EV may override the request and discharge up to underExcitedMaximumDischargePower to meet the minimum reactive power requirements. +
	 * This corresponds to the WUnPF attribute in the IEC 61850. +
	 *     *ISO 15118-20*: DER_BPT_AC_CPDReqEnergyTransferModeType: EVUnderExcitedMaximumDischargePower
	 */
	public ?float $evUnderExcitedMaxDischargePower = null;

	/**
	 * EV power factor when injecting (under excited) the minimum reactive power. +
	 * Corresponds to the OvPF attribute in IEC 61850. +
	 *     *ISO 15118-20*: DER_BPT_AC_CPDReqEnergyTransferModeType: EVUnderExcitedPowerFactor
	 */
	public ?float $evUnderExcitedPowerFactor = null;

	/**
	 * Rated maximum total apparent power, defined by min(EV, EVSE) in va.
	 * Corresponds to the VAMaxRtg in IEC 61850. +
	 *     *ISO 15118-20*: DER_BPT_AC_CPDReqEnergyTransferModeType: EVMaximumApparentPower
	 */
	public ?float $maxApparentPower = null;

	/**
	 * Rated maximum absorbed apparent power, defined by min(EV, EVSE) in va. +
	 *     This field represents the sum of all phases, unless values are provided for L2 and L3,
	 *     in which case this field represents phase L1. +
	 *     Corresponds to the ChaVAMaxRtg in IEC 61850. +
	 *     *ISO 15118-20*: DER_BPT_AC_CPDReqEnergyTransferModeType: EVMaximumChargeApparentPower
	 */
	public ?float $maxChargeApparentPower = null;

	/**
	 * Rated maximum absorbed apparent power on phase L2, defined by min(EV, EVSE) in va.
	 * Corresponds to the ChaVAMaxRtg in IEC 61850. +
	 *     *ISO 15118-20*: DER_BPT_AC_CPDReqEnergyTransferModeType: EVMaximumChargeApparentPower_L2
	 */
	public ?float $maxChargeApparentPower_L2 = null;

	/**
	 * Rated maximum absorbed apparent power on phase L3, defined by min(EV, EVSE) in va.
	 * Corresponds to the ChaVAMaxRtg in IEC 61850. +
	 *     *ISO 15118-20*: DER_BPT_AC_CPDReqEnergyTransferModeType: EVMaximumChargeApparentPower_L3
	 */
	public ?float $maxChargeApparentPower_L3 = null;

	/**
	 * Rated maximum injected apparent power, defined by min(EV, EVSE) in va. +
	 *     This field represents the sum of all phases, unless values are provided for L2 and L3,
	 *     in which case this field represents phase L1. +
	 *     Corresponds to the DisVAMaxRtg in IEC 61850. +
	 *     *ISO 15118-20*: DER_BPT_AC_CPDReqEnergyTransferModeType: EVMaximumDischargeApparentPower
	 */
	public ?float $maxDischargeApparentPower = null;

	/**
	 * Rated maximum injected apparent power on phase L2, defined by min(EV, EVSE) in va. +
	 *     Corresponds to the DisVAMaxRtg in IEC 61850. +
	 *     *ISO 15118-20*: DER_BPT_AC_CPDReqEnergyTransferModeType: EVMaximumDischargeApparentPower_L2
	 */
	public ?float $maxDischargeApparentPower_L2 = null;

	/**
	 * Rated maximum injected apparent power on phase L3, defined by min(EV, EVSE) in va. +
	 *     Corresponds to the DisVAMaxRtg in IEC 61850. +
	 *     *ISO 15118-20*: DER_BPT_AC_CPDReqEnergyTransferModeType: EVMaximumDischargeApparentPower_L3
	 */
	public ?float $maxDischargeApparentPower_L3 = null;

	/**
	 * Rated maximum absorbed reactive power, defined by min(EV, EVSE), in vars. +
	 *     This field represents the sum of all phases, unless values are provided for L2 and L3,
	 *     in which case this field represents phase L1. +
	 * Corresponds to the AvarMax attribute in the IEC 61850. +
	 *     *ISO 15118-20*: DER_BPT_AC_CPDReqEnergyTransferModeType: EVMaximumChargeReactivePower
	 */
	public ?float $maxChargeReactivePower = null;

	/**
	 * Rated maximum absorbed reactive power, defined by min(EV, EVSE), in vars on phase L2. +
	 * Corresponds to the AvarMax attribute in the IEC 61850. +
	 *     *ISO 15118-20*: DER_BPT_AC_CPDReqEnergyTransferModeType: EVMaximumChargeReactivePower_L2
	 */
	public ?float $maxChargeReactivePower_L2 = null;

	/**
	 * Rated maximum absorbed reactive power, defined by min(EV, EVSE), in vars on phase L3. +
	 * Corresponds to the AvarMax attribute in the IEC 61850. +
	 *     *ISO 15118-20*: DER_BPT_AC_CPDReqEnergyTransferModeType: EVMaximumChargeReactivePower_L3
	 */
	public ?float $maxChargeReactivePower_L3 = null;

	/**
	 * Rated minimum absorbed reactive power, defined by max(EV, EVSE), in vars. +
	 *     This field represents the sum of all phases, unless values are provided for L2 and L3,
	 *     in which case this field represents phase L1. +
	 *     *ISO 15118-20*: DER_BPT_AC_CPDReqEnergyTransferModeType: EVMinimumChargeReactivePower
	 */
	public ?float $minChargeReactivePower = null;

	/**
	 * Rated minimum absorbed reactive power, defined by max(EV, EVSE), in vars on phase L2. +
	 *     *ISO 15118-20*: DER_BPT_AC_CPDReqEnergyTransferModeType: EVMinimumChargeReactivePower_L2
	 */
	public ?float $minChargeReactivePower_L2 = null;

	/**
	 * Rated minimum absorbed reactive power, defined by max(EV, EVSE), in vars on phase L3. +
	 *     *ISO 15118-20*: DER_BPT_AC_CPDReqEnergyTransferModeType: EVMinimumChargeReactivePower_L3
	 */
	public ?float $minChargeReactivePower_L3 = null;

	/**
	 * Rated maximum injected reactive power, defined by min(EV, EVSE), in vars. +
	 *     This field represents the sum of all phases, unless values are provided for L2 and L3,
	 *     in which case this field represents phase L1. +
	 * Corresponds to the IvarMax attribute in the IEC 61850. +
	 *     *ISO 15118-20*: DER_BPT_AC_CPDReqEnergyTransferModeType: EVMaximumDischargeReactivePower
	 */
	public ?float $maxDischargeReactivePower = null;

	/**
	 * Rated maximum injected reactive power, defined by min(EV, EVSE), in vars on phase L2. +
	 * Corresponds to the IvarMax attribute in the IEC 61850. +
	 *     *ISO 15118-20*: DER_BPT_AC_CPDReqEnergyTransferModeType: EVMaximumDischargeReactivePower_L2
	 */
	public ?float $maxDischargeReactivePower_L2 = null;

	/**
	 * Rated maximum injected reactive power, defined by min(EV, EVSE), in vars on phase L3. +
	 * Corresponds to the IvarMax attribute in the IEC 61850. +
	 *     *ISO 15118-20*: DER_BPT_AC_CPDReqEnergyTransferModeType: EVMaximumDischargeReactivePower_L3
	 */
	public ?float $maxDischargeReactivePower_L3 = null;

	/**
	 * Rated minimum injected reactive power, defined by max(EV, EVSE), in vars. +
	 *     This field represents the sum of all phases, unless values are provided for L2 and L3,
	 *     in which case this field represents phase L1. +
	 *         *ISO 15118-20*: DER_BPT_AC_CPDReqEnergyTransferModeType: EVMinimumDischargeReactivePower
	 */
	public ?float $minDischargeReactivePower = null;

	/**
	 * Rated minimum injected reactive power, defined by max(EV, EVSE), in var on phase L2. +
	 *         *ISO 15118-20*: DER_BPT_AC_CPDReqEnergyTransferModeType: EVMinimumDischargeReactivePower_L2
	 */
	public ?float $minDischargeReactivePower_L2 = null;

	/**
	 * Rated minimum injected reactive power, defined by max(EV, EVSE), in var on phase L3. +
	 *         *ISO 15118-20*: DER_BPT_AC_CPDReqEnergyTransferModeType: EVMinimumDischargeReactivePower_L3
	 */
	public ?float $minDischargeReactivePower_L3 = null;

	/**
	 * Line voltage supported by EVSE and EV.
	 *         *ISO 15118-20*: DER_BPT_AC_CPDReqEnergyTransferModeType: EVNominalVoltage
	 */
	public ?float $nominalVoltage = null;

	/**
	 * The nominal AC voltage (rms) offset between the Charging Station's electrical connection point and the utility’s point of common coupling. +
	 *         *ISO 15118-20*: DER_BPT_AC_CPDReqEnergyTransferModeType: EVNominalVoltageOffset
	 */
	public ?float $nominalVoltageOffset = null;

	/**
	 * Maximum AC rms voltage, as defined by min(EV, EVSE)  to operate with. +
	 *        *ISO 15118-20*: DER_BPT_AC_CPDReqEnergyTransferModeType: EVMaximumNominalVoltage
	 */
	public ?float $maxNominalVoltage = null;

	/**
	 * Minimum AC rms voltage, as defined by max(EV, EVSE)  to operate with. +
	 *        *ISO 15118-20*: DER_BPT_AC_CPDReqEnergyTransferModeType: EVMinimumNominalVoltage
	 */
	public ?float $minNominalVoltage = null;

	/**
	 * Manufacturer of the EV inverter. +
	 *        *ISO 15118-20*: DER_BPT_AC_CPDReqEnergyTransferModeType: EVInverterManufacturer
	 */
	public ?string $evInverterManufacturer = null;

	/**
	 * Model name of the EV inverter. +
	 *        *ISO 15118-20*: DER_BPT_AC_CPDReqEnergyTransferModeType: EVInverterModel
	 */
	public ?string $evInverterModel = null;

	/**
	 * Serial number of the EV inverter. +
	 *        *ISO 15118-20*: DER_BPT_AC_CPDReqEnergyTransferModeType: EVInverterSerialNumber
	 */
	public ?string $evInverterSerialNumber = null;

	/**
	 * Software version of EV inverter. +
	 *        *ISO 15118-20*: DER_BPT_AC_CPDReqEnergyTransferModeType: EVInverterSwVersion
	 */
	public ?string $evInverterSwVersion = null;

	/**
	 * Hardware version of EV inverter. +
	 *        *ISO 15118-20*: DER_BPT_AC_CPDReqEnergyTransferModeType: EVInverterHwVersion
	 */
	public ?string $evInverterHwVersion = null;

	/**
	 * Type of islanding detection method. Only mandatory when islanding detection is required at the site, as set in the ISO 15118 Service Details configuration. +
	 *        *ISO 15118-20*: DER_BPT_AC_CPDReqEnergyTransferModeType: EVIslandingDetectionMethod
	 */
	public ?array $evIslandingDetectionMethod = null;

	/**
	 * Time after which EV will trip if an island has been detected. +
	 *        *ISO 15118-20*: DER_BPT_AC_CPDReqEnergyTransferModeType: EVIslandingTripTime
	 */
	public ?float $evIslandingTripTime = null;

	/**
	 * Maximum injected DC current allowed at level 1 charging. +
	 *        *ISO 15118-20*: DER_BPT_AC_CPDReqEnergyTransferModeType: EVMaximumLevel1DCInjection
	 */
	public ?float $evMaximumLevel1DCInjection = null;

	/**
	 * Maximum allowed duration of DC injection at level 1 charging. +
	 *        *ISO 15118-20*: DER_BPT_AC_CPDReqEnergyTransferModeType: EVDurationLevel1DCInjection
	 */
	public ?float $evDurationLevel1DCInjection = null;

	/**
	 * Maximum injected DC current allowed at level 2 charging. +
	 *        *ISO 15118-20*: DER_BPT_AC_CPDReqEnergyTransferModeType: EVMaximumLevel2DCInjection
	 */
	public ?float $evMaximumLevel2DCInjection = null;

	/**
	 * Maximum allowed duration of DC injection at level 2 charging. +
	 *        *ISO 15118-20*: DER_BPT_AC_CPDReqEnergyTransferModeType: EVDurationLevel2DCInjection
	 */
	public ?float $evDurationLevel2DCInjection = null;

	/**
	 * Measure of the susceptibility of the circuit to reactance, in Siemens (S). +
	 *        *ISO 15118-20*: DER_BPT_AC_CPDReqEnergyTransferModeType: EVReactiveSusceptance
	 */
	public ?float $evReactiveSusceptance = null;

	/**
	 * Total energy value, in Wh, that EV is allowed to provide during the entire V2G session. The value is independent of the V2X Cycling area. Once this value reaches the value of 0, the EV may block any attempt to discharge in order to protect the battery health.
	 *        *ISO 15118-20*: DER_BPT_AC_CPDReqEnergyTransferModeType: EVSessionTotalDischargeEnergyAvailable
	 */
	public ?float $evSessionTotalDischargeEnergyAvailable = null;

	/** This class does not get 'AdditionalProperties = false' in the schema generation, so it can be extended with arbitrary JSON properties to allow adding custom data. */
	public ?object $customData = null;
}
