<?php
	$debugKey = "213742069";

	function error() {
		header("Location: engine/root/error.php");
	}
	set_error_handler('error');

	require('engine/config.rwrk');

	if ($isOnline != 1) {
		header("Location: engine/root/offline.php");
	}

	if ($forceCrash == 1) {
		header("Location: engine/root/error.php");
	}
	
	if($devMode == 1 && isset($_GET["$debugKey"])) {
//	if ($displayLangStrings == 1) {
		require('content/language-strings.php');
	}
	else {
		require('content/language.php');
	}

	require('engine/init/metadata.rwrk');

	if ($devMode ==1 ) { require('engine/root/wip.rwrk'); }
?>