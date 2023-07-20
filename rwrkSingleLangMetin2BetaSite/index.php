<!DOCTYPE html>
<html lang='pl'>
	<head>
		<?php
			$siteSign = "index";
			require ('engine/root/kernel.php');
			echo "$boot";
		?>
	</head>
	<body>
		<?php require('engine/template/preloader.rwrk'); ?>
		<nav>
			<?php require('engine/template/nav.php'); ?>
		</nav>
		<main>
			<?php require('engine/template/main.php'); ?>
			<?php if (file_exists($rwrkRegister)) { echo "<hr/>
			<br/>
			<a href='$rwrkRegister'><button>$buttonText</button></a>"; }
			if (file_exists($rwrkRegister) && file_exists($rwrkDownload)) { echo "<p>$assistText <a href='$rwrkDownload'>$assistLink</a></p>"; } ?>
		</main>
		<footer>
			<?php require('engine/template/footer.php'); ?>
		</footer>
	</body>
	<?php require('engine/template/preloaderScript.php'); ?>
</html>
