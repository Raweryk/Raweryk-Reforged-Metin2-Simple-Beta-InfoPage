<!DOCTYPE html>
<html lang="pl">
	<head>
		<?php require('../config.rwrk'); ?>
		<meta charset="pl-PL.UTF-8">
		<meta http-equiv='refresh' content='<?php echo "$offlineTimeout"; ?>;url=../../'/>
		<link rel="icon" type="image/jpg" href="raweryk.jpg"/>
		<link rel="stylesheet" href="rwrk.css">
		<title>Offline</title>
	</head>
	<body>
<!--		<img src="./raweryk.gif"/><br/>
-->		<span id="rwrkError_Title">Offline</span>
		<span id="rwrkError_Desc">{ rwrk://site.Lang(OfflineTXT) }</span>
		<span id="rwrkError_Link"><a href="../../">Wciśnij F5 aby powrócić</a> <span id="rwrkError_Blink">_</span>
		</span>
	</body>
</html>