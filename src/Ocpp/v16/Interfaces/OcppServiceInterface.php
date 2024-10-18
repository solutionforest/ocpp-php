<?php

namespace SolutionForest\OcppPhp\Ocpp\v16\Interfaces;

interface OcppServiceInterface
{
	public static function handleAuthorize(array $message): array;


	public static function handleBootNotification(array $message): array;


	public static function handleCancelReservation(array $message): array;


	public static function handleCertificateSigned(array $message): array;


	public static function handleChangeAvailability(array $message): array;


	public static function handleChangeConfiguration(array $message): array;


	public static function handleClearCache(array $message): array;


	public static function handleClearChargingProfile(array $message): array;


	public static function handleDataTransfer(array $message): array;


	public static function handleDeleteCertificate(array $message): array;


	public static function handleDiagnosticsStatusNotification(array $message): array;


	public static function handleExtendedTriggerMessage(array $message): array;


	public static function handleFirmwareStatusNotification(array $message): array;


	public static function handleGetCompositeSchedule(array $message): array;


	public static function handleGetConfiguration(array $message): array;


	public static function handleGetDiagnostics(array $message): array;


	public static function handleGetInstalledCertificateIds(array $message): array;


	public static function handleGetLocalListVersion(array $message): array;


	public static function handleGetLog(array $message): array;


	public static function handleHeartbeat(array $message): array;


	public static function handleInstallCertificate(array $message): array;


	public static function handleLogStatusNotification(array $message): array;


	public static function handleMeterValues(array $message): array;


	public static function handleRemoteStartTransaction(array $message): array;


	public static function handleRemoteStopTransaction(array $message): array;


	public static function handleReserveNow(array $message): array;


	public static function handleReset(array $message): array;


	public static function handleSecurityEventNotification(array $message): array;


	public static function handleSendLocalList(array $message): array;


	public static function handleSetChargingProfile(array $message): array;


	public static function handleSignCertificate(array $message): array;


	public static function handleSignedFirmwareStatusNotification(array $message): array;


	public static function handleSignedUpdateFirmware(array $message): array;


	public static function handleStartTransaction(array $message): array;


	public static function handleStatusNotification(array $message): array;


	public static function handleStopTransaction(array $message): array;


	public static function handleTriggerMessage(array $message): array;


	public static function handleUnlockConnector(array $message): array;


	public static function handleUpdateFirmware(array $message): array;
}
