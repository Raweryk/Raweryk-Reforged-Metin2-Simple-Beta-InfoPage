<!DOCTYPE html>
<html lang='pl'>
	<head>
		<?php require ('engine/root/kernel.php'); ?>
		<meta http-equiv='refresh' content='<?php echo "$websiteTimeout"; ?>'/>
		<title><?php if ($overwriteTitle == 1) { echo "$sysSiteTitle"; } else { echo "$coreServerName $coreServerHello"; } ?></title>
	</head>
	<body>
	<div id="loader-wrapper">
		<div class="load">
			<hr><hr><hr><hr>
		</div>
	</div>
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
					<span><?php echo "$sysNavSeparate"; ?></span>
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
		<content>
			<a href='./'><img src='content/logo.png' alt='logo'/></a>
			<h1><?php echo "$coreServerHello"; ?><b> <?php echo "$coreServerName"; ?></b>!</h1>
			<h2><?php echo "$sysServerDesc"; ?></h2>
			<hr/>
			<br/>
			<a href='<?php echo "$uriButtonURI"; ?>'><button><?php echo "$coreButtonDesc"; ?></button></a>
			<p><?php echo "$coreAssist"; ?> <a href='./pobierz.php'><?php echo "$coreAssistLink"; ?></a></p>
		</content>
		<footer>
			Copyright &copy; <?php echo date("Y"); ?> <?php echo "$coreServerName"; ?>. Coded with <span id='rwrk_copyright_heart'>♥</span> by <a data-tooltip="Olaf `Raweryk` Zalewski" href='https://fb.me/Raweryk' base target='_blank'>Raweryk</a> in 2021. 
		</footer>
		<?php if($devMode == 1 && isset($_GET["$debugKey"])) { echo date("D, d M Y - H:i:s [h:i:s A]"); } ?>
		<?php if ($devMode == 1) { echo "<div id='rwrk_wipInfo'>Prace w toku</div><div id='rwrk_verRID'>$devVersion</div>"; } ?>
	</body>
	<script>
		window.onload = function(){
			document.querySelector("#loader-wrapper").style.display = "none";
		}
	</script>
</html>