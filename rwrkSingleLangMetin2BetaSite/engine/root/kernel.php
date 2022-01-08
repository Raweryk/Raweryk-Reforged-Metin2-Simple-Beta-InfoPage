<?php
	require('engine/root/kernelSettings.php');

	require('content/meta.php');

	function error() {
		header("Location: engine/root/error.php");
	}
	set_error_handler('error');

	require('engine/config.rwrk');

	if($isOnline == 0) {
	//if($isOnline == 0 || $debugMode == 0 && !isset($_GET["$debugKey"])) {
		header("Location: engine/root/offline.php");
	}

	if ($debugMode ==1 && $forceCrash == 1 && isset($_GET["$debugKey"])) {
		header("Location: engine/root/error.php");
	}

//	if ($displayLangStrings == 1) {
	if($devMode == 1 && $displayLangStrings == 1 && isset($_GET["$debugKey"])) {
		require('content/language-strings.php');
	}
	else {
		require('content/language.php');
	}

	if (file_exists($rwrkRegister)) {
		require('content/language-register.php');
	}

	if (file_exists($rwrkDownload)) {
		require('content/language-download.php');
	}

	require('engine/init/metadata.rwrk');

	if ($devMode ==1 ) { require('engine/root/wip.rwrk'); }

	if ($debugMode == 1 && isset($_GET["$debugKey"]) && $primaryElevation == 1) { echo "<meta http-equiv='cache-control' content='no-store, no-cache'/>" ; }
?>