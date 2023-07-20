<?php
require('kernelSettings.php');
require('engine/config.rwrk');
require('content/meta.php');
require('engine/init/metadata.rwrk');
require('content/language.php');

if($isOnline == false && !isset($_GET["$debugKey"])) {
	header("Location: engine/root/index.php?offline");
}

if($isOnline == true && !isset($_GET["$debugKey"])) {
	set_error_handler('rwrkError');
}

function rwrkError() {
	header("Location: engine/root/index.php?error");
}

if ($overwriteTitle == 1) { $bootTitle = "$sysSiteTitle"; } else { $bootTitle = "$coreServerHello $coreServerName"; }
//$boot = "<meta http-equiv='refresh' content='$websiteTimeout'/><link rel='stylesheet' href='engine/frontend/$siteSign.css'/><title>$bootTitle</title>";
$boot = "<meta http-equiv='refresh' content='$websiteTimeout'/><title>$bootTitle</title><link rel='stylesheet' href='engine/frontend/coreStyle.css'/>";
?>
