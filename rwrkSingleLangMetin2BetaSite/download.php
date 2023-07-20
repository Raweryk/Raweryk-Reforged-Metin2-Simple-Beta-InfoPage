<!DOCTYPE html>
<html lang='pl'>
	<head>
		<?php
			$siteSign = "download";
			require ('engine/root/kernel.php');
			echo "$boot";
		?>
	</head>
	<body>
		<?php require('engine/frontend/template/preloader.rwrk'); ?>
		<nav>
			<?php require('engine/frontend/template/nav.php'); ?>
		</nav>
		<main>
			<?php require('engine/frontend/template/main.php'); ?>
			<?php if (file_exists($rwrkRegister)) { echo "<hr/>
			<br/>
			<a href='/content/$fileName' download><button>$coreButtonDesc</button></a>"; }
			if (file_exists($rwrkRegister) && file_exists($rwrkDownload)) { echo "
			<p>$coreAssist <a href='./register.php'>$coreAssistLink</a></p>"; } ?>
		</main>
		<footer>
			<?php require('engine/frontend/template/footer.php'); ?>
		</footer>
	</body>
	<?php require('engine/frontend/template/preloaderScript.php'); ?>
</html>
