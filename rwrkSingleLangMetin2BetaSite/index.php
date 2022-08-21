<!DOCTYPE html>
<html lang='pl'>
	<head>
		<?php require('engine/root/kernel.php');
		$siteSign = "index";
		echo "$boot";?>
	</head>
	<body>
	<div id="rwrkPreloader">
		<div class="rwrkLoading">
			<hr/><hr/><hr/><hr/>
		</div>
	</div>
		<nav>
			<ul>
				<li>
					<a href='./index.php' id='navSelected'><?php echo "$sysNavIndex"; ?></a>
				</li>
				<?php if (file_exists($rwrkRegister)) { echo "<li>
					<a href='./register.php'>$sysNavRegister</a>
				</li>"; }
				if (file_exists($rwrkDownload)) { echo "<li>
					<a href='./download.php'>$sysNavDownload</a>
				</li>"; }
				if ($displayBoard == 1 || $displayFacebook == 1 || $displayDiscord == 1) { echo "<li>
					<span>$sysNavSeparate</span>
				</li>"; }
				if ($displayBoard == 1) { echo "<li>
					<a href='$uriBoardURI'>$userNavBoard</a>
				</li>"; }
				if ($displayFacebook == 1) { echo "<li>
					<a href='$uriFacebookURI'>$userNavFacebook</a>
				</li>"; }
				if ($displayDiscord == 1) { echo "<li>
					<a href='$uriDiscordURI'>$userNavDiscord</a>
				</li>"; } ?>
			</ul>
		</nav>
		<content>
			<img src='content/logo.png' alt='logo'/>
			<h1><?php echo "$coreServerHello"; ?> <b><?php echo "$coreServerName"; ?></b>!</h1>
			<h2><?php echo "$sysServerDesc"; ?></h2>
			<?php if (file_exists($rwrkRegister)) { echo "<hr/>
			<br/>
			<a href='./register.php'><button>$coreButtonDesc</button></a>"; }
			if (file_exists($rwrkRegister) && file_exists($rwrkDownload)) { echo "
			<p>$coreAssist <a href='./download.php'>$coreAssistLink</a></p>"; } ?>
		</content>
		<footer>
			Copyright &copy; <?php echo date("Y"); ?> <span><?php echo "$coreServerName"; ?></span>. Coded with <span id='rwrk_copyright_heart'>♥</span> by <a data-tooltip="Olaf `Raweryk` Zalewski" href='https://fb.me/Raweryk' base target='_blank'>Raweryk</a> in 2021.
		</footer>
		<?php if(isset($_GET["$debugKey"])) { echo date("D, d M Y - H:i:s [h:i:s A]"); } ?>
	</body>
	<script>
		window.onload = function(){
			<?php if ($disablePreloader == 1) { echo "//" ; } ?>document.querySelector("#rwrkPreloader").style.display = "none";
		}
	</script>
</html>
