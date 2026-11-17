<?php

namespace SolutionForest\OcppPhp\Ocpp\v21\Enums;

/**
 * Values of the Measurand field of a value in MeterValuesRequest , TransactionEventRequest.
 */
enum Measurand: string
{
	case CurrentExport = 'Current.Export';
	case CurrentExportOffered = 'Current.Export.Offered';
	case CurrentExportMinimum = 'Current.Export.Minimum';
	case CurrentImport = 'Current.Import';
	case CurrentImportOffered = 'Current.Import.Offered';
	case CurrentImportMinimum = 'Current.Import.Minimum';
	case CurrentOffered = 'Current.Offered';
	case DisplayPresentSOC = 'Display.PresentSOC';
	case DisplayMinimumSOC = 'Display.MinimumSOC';
	case DisplayTargetSOC = 'Display.TargetSOC';
	case DisplayMaximumSOC = 'Display.MaximumSOC';
	case DisplayRemainingTimeToMinimumSOC = 'Display.RemainingTimeToMinimumSOC';
	case DisplayRemainingTimeToTargetSOC = 'Display.RemainingTimeToTargetSOC';
	case DisplayRemainingTimeToMaximumSOC = 'Display.RemainingTimeToMaximumSOC';
	case DisplayChargingComplete = 'Display.ChargingComplete';
	case DisplayBatteryEnergyCapacity = 'Display.BatteryEnergyCapacity';
	case DisplayInletHot = 'Display.InletHot';
	case EnergyActiveExportInterval = 'Energy.Active.Export.Interval';
	case EnergyActiveExportRegister = 'Energy.Active.Export.Register';
	case EnergyActiveImportInterval = 'Energy.Active.Import.Interval';
	case EnergyActiveImportRegister = 'Energy.Active.Import.Register';
	case EnergyActiveImportCableLoss = 'Energy.Active.Import.CableLoss';
	case EnergyActiveImportLocalGenerationRegister = 'Energy.Active.Import.LocalGeneration.Register';
	case EnergyActiveNet = 'Energy.Active.Net';
	case EnergyActiveSetpointInterval = 'Energy.Active.Setpoint.Interval';
	case EnergyApparentExport = 'Energy.Apparent.Export';
	case EnergyApparentImport = 'Energy.Apparent.Import';
	case EnergyApparentNet = 'Energy.Apparent.Net';
	case EnergyReactiveExportInterval = 'Energy.Reactive.Export.Interval';
	case EnergyReactiveExportRegister = 'Energy.Reactive.Export.Register';
	case EnergyReactiveImportInterval = 'Energy.Reactive.Import.Interval';
	case EnergyReactiveImportRegister = 'Energy.Reactive.Import.Register';
	case EnergyReactiveNet = 'Energy.Reactive.Net';
	case EnergyRequestTarget = 'EnergyRequest.Target';
	case EnergyRequestMinimum = 'EnergyRequest.Minimum';
	case EnergyRequestMaximum = 'EnergyRequest.Maximum';
	case EnergyRequestMinimumV2X = 'EnergyRequest.Minimum.V2X';
	case EnergyRequestMaximumV2X = 'EnergyRequest.Maximum.V2X';
	case EnergyRequestBulk = 'EnergyRequest.Bulk';
	case Frequency = 'Frequency';
	case PowerActiveExport = 'Power.Active.Export';
	case PowerActiveImport = 'Power.Active.Import';
	case PowerActiveSetpoint = 'Power.Active.Setpoint';
	case PowerActiveResidual = 'Power.Active.Residual';
	case PowerExportMinimum = 'Power.Export.Minimum';
	case PowerExportOffered = 'Power.Export.Offered';
	case PowerFactor = 'Power.Factor';
	case PowerImportOffered = 'Power.Import.Offered';
	case PowerImportMinimum = 'Power.Import.Minimum';
	case PowerOffered = 'Power.Offered';
	case PowerReactiveExport = 'Power.Reactive.Export';
	case PowerReactiveImport = 'Power.Reactive.Import';
	case SoC = 'SoC';
	case Voltage = 'Voltage';
	case VoltageMinimum = 'Voltage.Minimum';
	case VoltageMaximum = 'Voltage.Maximum';
}
