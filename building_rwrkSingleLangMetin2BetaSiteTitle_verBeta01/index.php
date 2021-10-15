<!DOCTYPE html>
<html lang='pl'>
	<head>
		<?php require('engine/config.rwrk'); ?>
		<?php require('content/language.php'); ?>
		<meta http-equiv='refresh' content='<?php echo "$websiteTimeout"; ?>'/>
		<meta charset='pl-PL.UTF-8'/>
		<meta name='viewport' content='width=device-width, initial-scale=0.9'/>
		<meta name='title' content='Metin2'/>
		<meta name='description' content='Metin2'/>
		<meta name='keywords' content='Metin2'/>
		<meta name='robots' content='index, nofollow'/>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
		<!--<meta name='language' content='English'>-->
		<meta name='author' content='Olaf `Raweryk` Zalewski'/>
		<!--<base target='_blank'>-->
		<link rel='stylesheet' href='engine/frontend/index.css'/>
		<link rel='shortcut icon' href='content/favicon.ico'/>
		<!--RWRK://WorkInProgress--><meta http-equiv='cache-control' content='no-cache'/><!--RWRK://WorkInProgress-->
		<!--RWRK://WorkInProgress--><link rel='stylesheet' href='./engine/root/rwrkwip.css'/><!--RWRK://WorkInProgress-->
		<title><?php echo "$sysSiteTitle"; ?></title>
	</head>
	<body>
	<?php
		if ($online != 1) {
			header("Location: engine/root/offline.php");
		}
	?>
	<!--Wygenerowano: <?php echo date("D, d M Y - H:i:s [h:i:s A]"); ?>-->
		<nav>
			<ul>
				<li>
					<a href='./index.php' id='navSelected'><?php echo "$sysNavIndex"; ?></a>
				</li>
				<li>
					<a href='./register.php'><?php echo "$sysNavRegister"; ?></a>
				</li>
				<li>
					<a href='./download.php'><?php echo "$sysNavDownload"; ?></a>
				</li>
				<li>
					<a href='<?php echo "$uriBoardURI"; ?>'><?php echo "$userNavBoard"; ?></a>
				</li>
				<li>
					<a href='<?php echo "$uriFacebookURI"; ?>'><?php echo "$userNavFacebook"; ?></a>
				</li>
				<li>
					<a href='<?php echo "$uriDiscordURI"; ?>'><?php echo "$userNavDiscord"; ?></a>
				</li>
			</ul>
		</nav>
		<!--RWRK://WorkInProgress--><div id='rwrk_wipInfo'>Prace w toku</div><!--RWRK://WorkInProgress-->
		<!--RWRK://WorkInProgress--><div id='rwrk_verRID'>vB01</div><!--RWRK://WorkInProgress-->
		<content>
		<a href='./index.php'><img src='content/logo.png' alt='logo'/></a>
		<h1><?php echo "$coreServerHello"; ?><b> <?php echo "$coreServerName"; ?></b>!</h1>
		<h2><?php echo "$sysServerDesc"; ?></h2>
		<hr/>
		<br/>
		<a href='#'><button><?php echo "$buttonDesc"; ?></button></a>
		<p><?php echo "$coreAssist"; ?> <a href='./pobierz.php'><?php echo "$coreAssistLink"; ?></a></p>
		</content>
		<footer>
			Copyright &copy; <?php echo date("Y"); ?> <?php echo "$coreServerName"; ?>. Coded with <span id='rwrk_copyright_heart'>♥</span> by <a href='https://fb.me/Raweryk' base target='_blank'>Raweryk</a> in 2021. 
		</footer>
	</body>
</html>