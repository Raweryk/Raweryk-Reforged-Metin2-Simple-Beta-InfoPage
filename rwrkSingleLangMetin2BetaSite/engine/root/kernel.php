<?php
//error_reporting(0);
require('kernelSettings.php');
require('engine/config.rwrk');
require('content/meta.php');
require('engine/init/metadata.rwrk');

if (!in_array($siteSign, $sitesSigned)) { header("Location: engine/root/rpod.php?unsignedSite"); }

if(isset($_GET["$stringKey"])) {
	require("engine/language/general-strings.php");
	require("engine/language/$siteSign-strings.php");
}
else {
	require("content/language-general.php");
	require("content/language-$siteSign.php");
}

if($isOnline == true && !isset($_GET["$debugKey"])) {
	set_error_handler('rwrkError');
}

function rwrkError() {
	//header("Location: engine/root/error.php");
}

if($isOnline == false && !isset($_GET["$debugKey"])) {
	header("Location: engine/root/offline.php");
}


if($debugMode == 1 && $forceCrash == 1) {
	header("Location: engine/root/error.php");
}

if ($overwriteTitle == 1) { $bootTitle = "$siteTitle"; } else { $bootTitle = "$serverHello $serverName"; }
$boot = "<meta http-equiv='refresh' content='$websiteTimeout'/>
<link rel='stylesheet' href='engine/visual/general.css'/>
<link rel='stylesheet' href='engine/visual/$siteSign.css'/>
<title>$bootTitle</title>";

$rwrkCopy = "Coded with <span id='rwrk_copyright_heart'>♥</span> by <a data-tooltip='Autor Strony' href='https://fb.me/Raweryk' base target='_blank'>Raweryk</a> in 2021.";
?>
