<?php

namespace SolutionForest\OcppPhp\Ocpp\v201\Interfaces;

interface OcppServiceInterface
{
	public static function handleAuthorize(array $message): array;


	public static function handleBootNotification(array $message): array;


	public static function handleCancelReservation(array $message): array;


	public static function handleCertificateSigned(array $message): array;


	public static function handleChangeAvailability(array $message): array;


	public static function handleClearCache(array $message): array;


	public static function handleClearChargingProfile(array $message): array;


	public static function handleClearDisplayMessage(array $message): array;


	public static function handleClearVariableMonitoring(array $message): array;


	public static function handleClearedChargingLimit(array $message): array;


	public static function handleCostUpdated(array $message): array;


	public static function handleCustomerInformation(array $message): array;


	public static function handleDataTransfer(array $message): array;


	public static function handleDeleteCertificate(array $message): array;


	public static function handleFirmwareStatusNotification(array $message): array;


	public static function handleGet15118EVCertificate(array $message): array;


	public static function handleGetBaseReport(array $message): array;


	public static function handleGetCertificateStatus(array $message): array;


	public static function handleGetChargingProfiles(array $message): array;


	public static function handleGetCompositeSchedule(array $message): array;


	public static function handleGetDisplayMessages(array $message): array;


	public static function handleGetInstalledCertificateIds(array $message): array;


	public static function handleGetLocalListVersion(array $message): array;


	public static function handleGetLog(array $message): array;


	public static function handleGetMonitoringReport(array $message): array;


	public static function handleGetReport(array $message): array;


	public static function handleGetTransactionStatus(array $message): array;


	public static function handleGetVariables(array $message): array;


	public static function handleHeartbeat(array $message): array;


	public static function handleInstallCertificate(array $message): array;


	public static function handleLogStatusNotification(array $message): array;


	public static function handleMeterValues(array $message): array;


	public static function handleNotifyChargingLimit(array $message): array;


	public static function handleNotifyCustomerInformation(array $message): array;


	public static function handleNotifyDisplayMessages(array $message): array;


	public static function handleNotifyEVChargingNeeds(array $message): array;


	public static function handleNotifyEVChargingSchedule(array $message): array;


	public static function handleNotifyEvent(array $message): array;


	public static function handleNotifyMonitoringReport(array $message): array;


	public static function handleNotifyReport(array $message): array;


	public static function handlePublishFirmware(array $message): array;


	public static function handlePublishFirmwareStatusNotification(array $message): array;


	public static function handleReportChargingProfiles(array $message): array;


	public static function handleRequestStartTransaction(array $message): array;


	public static function handleRequestStopTransaction(array $message): array;


	public static function handleReservationStatusUpdate(array $message): array;


	public static function handleReserveNow(array $message): array;


	public static function handleReset(array $message): array;


	public static function handleSecurityEventNotification(array $message): array;


	public static function handleSendLocalList(array $message): array;


	public static function handleSetChargingProfile(array $message): array;


	public static function handleSetDisplayMessage(array $message): array;


	public static function handleSetMonitoringBase(array $message): array;


	public static function handleSetMonitoringLevel(array $message): array;


	public static function handleSetNetworkProfile(array $message): array;


	public static function handleSetVariableMonitoring(array $message): array;


	public static function handleSetVariables(array $message): array;


	public static function handleSignCertificate(array $message): array;


	public static function handleStatusNotification(array $message): array;


	public static function handleTransactionEvent(array $message): array;


	public static function handleTriggerMessage(array $message): array;


	public static function handleUnlockConnector(array $message): array;


	public static function handleUnpublishFirmware(array $message): array;


	public static function handleUpdateFirmware(array $message): array;
}
