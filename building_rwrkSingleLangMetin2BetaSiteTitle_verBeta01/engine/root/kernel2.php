<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="pl-PL.UTF-8">
		<link rel="icon" type="image/jpg" href="raweryk.jpg"/>
		<link rel="stylesheet" href="root.css">
		<?php require('../config.rwrk'); ?>
		<?php require('../../content/language.php'); ?>
		<title><?php if ($debugMode == 1) { echo "Debug Mode [v0.1]"; } else { echo "Nieobsługiwany Wyjątek";} ?></title>
	</head>
	<body <?php if ($debugMode == 1) { echo "style='margin: 3% 0% !important'"; } ?>>
		<?php if ($debugMode == 1) { echo "
		<span id='rwrkError_Title'>config</span>
		<span id='rwrkError_Desc'>
			isOnline : $isOnline<br/>
			offlineTimeout : $offlineTimeout<br/>
			errorTimeout : $errorTimeout<br/>
			websiteTimeout : $websiteTimeout<br/>
			enableRegister : $enableRegister<br/>
			forceCrash : $forceCrash<br/>
			debugMode : $debugMode
		</span><br/>
		<span id='rwrkError_Title'>language</span>
		<span id='rwrkError_Desc'>
			sysSiteTitle : $sysSiteTitle<br/>
			sysNavIndex : $sysNavIndex<br/>
			sysNavRegister : $sysNavRegister<br/>
			sysNavDownload : $sysNavDownload<br/>
			sysServerHello : $sysServerHello<br/>
			sysServerDesc : $sysServerDesc<br/>
			sysNavSeparate : $sysNavSeparate<br/>
			coreServerName : $coreServerName<br/>
			coreServerHello : $coreServerHello<br/>
			coreServerDesc : $coreServerDesc<br/>
			coreButtonDesc : $coreButtonDesc<br/>
			coreAssist : $coreAssist<br/>
			coreAssistLink : $coreAssistLink<br/>
			userServerName : $userServerName<br/>
			userNavBoard : $userNavBoard<br/>
			userNavDiscord : $userNavDiscord<br/>
			userNavFacebook : $userNavFacebook<br/>
			uriButtonURI : $uriButtonURI<br/>
			uriBoardURI : $uriBoardURI<br/>
			uriDiscordURI : $uriDiscordURI<br/>
			uriFacebookURI : $uriFacebookURI<br/>
			uriDownloadURI : $uriDownloadURI
		</span>
		<span id='rwrkError_Link'><a href='../../'>Naciśnij tutaj, aby powrócić</a> <span id='rwrkError_Blink'>_</span></span>
		"; }
			else { echo "<span id='rwrkError_Title'>Raweryk</span>
		<span id='rwrkError_Desc'>Nie ładnie próbować dostać się tam, gdzie nie<br>powinno się być. Wracaj na stronę główną!</span>
		<span id='rwrkError_Link'><a href='../../'>Naciśnij tutaj, aby powrócić</a> <span id='rwrkError_Blink'>_</span></span>"; }
		?>
	</body>
</html>