<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Enums;

/**
 * Values of the Measurand field of a value in MeterValues , StopTransaction.
 */
enum Measurand: string
{
	case EnergyActiveExportRegister = 'Energy.Active.Export.Register';
	case EnergyActiveImportRegister = 'Energy.Active.Import.Register';
	case EnergyReactiveExportRegister = 'Energy.Reactive.Export.Register';
	case EnergyReactiveImportRegister = 'Energy.Reactive.Import.Register';
	case EnergyActiveExportInterval = 'Energy.Active.Export.Interval';
	case EnergyActiveImportInterval = 'Energy.Active.Import.Interval';
	case EnergyReactiveExportInterval = 'Energy.Reactive.Export.Interval';
	case EnergyReactiveImportInterval = 'Energy.Reactive.Import.Interval';
	case PowerActiveExport = 'Power.Active.Export';
	case PowerActiveImport = 'Power.Active.Import';
	case PowerOffered = 'Power.Offered';
	case PowerReactiveExport = 'Power.Reactive.Export';
	case PowerReactiveImport = 'Power.Reactive.Import';
	case PowerFactor = 'Power.Factor';
	case CurrentImport = 'Current.Import';
	case CurrentExport = 'Current.Export';
	case CurrentOffered = 'Current.Offered';
	case Voltage = 'Voltage';
	case Frequency = 'Frequency';
	case Temperature = 'Temperature';
	case SoC = 'SoC';
	case RPM = 'RPM';
}
