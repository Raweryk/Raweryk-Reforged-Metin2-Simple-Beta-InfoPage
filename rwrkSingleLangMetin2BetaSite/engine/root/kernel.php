<?php
require('kernelSettings.php');
require('engine/config.rwrk');
require('content/meta.php');
require('engine/init/metadata.rwrk');

if($isOnline == true && !isset($_GET["$debugKey"])) {
	set_error_handler('rwrkError');
}

function rwrkError() {
	header("Location: engine/root/error.php");
}

if($isOnline == false && !isset($_GET["$debugKey"])) {
	header("Location: engine/root/offline.php");
}


if($debugMode == 1 && $forceCrash == 1) {
	header("Location: engine/root/error.php");
}

//if ($displayLangStrings == 1) {
if($displayLangStrings == 1 && isset($_GET["$debugKey"])) {
	require('content/language-strings.php');
}
else {
	require('content/language.php');
}

if (file_exists($rwrkRegister)) {
	if($displayLangStrings == 1 && isset($_GET["$debugKey"])) {
		require('content/language-register-strings.php');
	}
	else {
		require('content/language-register.php');
	}
}

if (file_exists($rwrkDownload)) {
	if($displayLangStrings == 1 && isset($_GET["$debugKey"])) {
		require('content/language-download-strings.php');
	}
	else {
		require('content/language-download.php');
	}
}

if ($overwriteTitle == 1) { $bootTitle = "$sysSiteTitle"; } else { $bootTitle = "$coreServerHello $coreServerName"; }

$boot = "<meta http-equiv='refresh' content='$websiteTimeout'/><link rel='stylesheet' href='engine/frontend/index.css'/><title>$bootTitle</title>";
?>
