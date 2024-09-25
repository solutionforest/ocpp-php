<?php

namespace SolutionForest\OocpPhp\Enums;

/**
 * Values of the Measurand field of a value in MeterValuesRequest , TransactionEventRequest.
 */
enum Measurand: string
{
	case CurrentExport = 'Current.Export';
	case CurrentImport = 'Current.Import';
	case CurrentOffered = 'Current.Offered';
	case EnergyActiveExportRegister = 'Energy.Active.Export.Register';
	case EnergyActiveImportRegister = 'Energy.Active.Import.Register';
	case EnergyReactiveExportRegister = 'Energy.Reactive.Export.Register';
	case EnergyReactiveImportRegister = 'Energy.Reactive.Import.Register';
	case EnergyActiveExportInterval = 'Energy.Active.Export.Interval';
	case EnergyActiveImportInterval = 'Energy.Active.Import.Interval';
	case EnergyActiveNet = 'Energy.Active.Net';
	case EnergyReactiveExportInterval = 'Energy.Reactive.Export.Interval';
	case EnergyReactiveImportInterval = 'Energy.Reactive.Import.Interval';
	case EnergyReactiveNet = 'Energy.Reactive.Net';
	case EnergyApparentNet = 'Energy.Apparent.Net';
	case EnergyApparentImport = 'Energy.Apparent.Import';
	case EnergyApparentExport = 'Energy.Apparent.Export';
	case Frequency = 'Frequency';
	case PowerActiveExport = 'Power.Active.Export';
	case PowerActiveImport = 'Power.Active.Import';
	case PowerFactor = 'Power.Factor';
	case PowerOffered = 'Power.Offered';
	case PowerReactiveExport = 'Power.Reactive.Export';
	case PowerReactiveImport = 'Power.Reactive.Import';
	case SoC = 'SoC';
	case Voltage = 'Voltage';
}
