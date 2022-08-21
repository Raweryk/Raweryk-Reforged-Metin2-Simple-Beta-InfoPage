<?php
require('kernelSettings.php');
require('engine/config.rwrk');
require('content/meta.php');

if($isOnline == true && !isset($_GET["$debugKey"])) {
	set_error_handler('rwrkError');
}

function rwrkError() {
	header("Location: engine/root/error.php");
}

if($isOnline == false && !isset($_GET["$debugKey"])) {
	header("Location: engine/root/offline.php");
}

if($debugMode ==1 && $forceCrash == 1 && isset($_GET["$debugKey"])) {
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

require('engine/init/metadata.rwrk');

if ($debugMode == 1 && isset($_GET["$debugKey"]) && $primaryElevation == 1) { echo "<meta http-equiv='cache-control' content='no-store, no-cache'/>" ; }
?>
