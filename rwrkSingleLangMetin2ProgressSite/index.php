<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="pl-PL.UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="title" content="<?php echo "$serverName"; ?>">
		<meta name="description" content="<?php echo "$serverName"; ?>">
		<meta name="keywords" content="<?php echo "$serverName"; ?>">
		<meta name="robots" content="index, nofollow">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<!--<meta name="language" content="English">-->
		<meta name="author" content="Olaf 'Raweryk' Zalewski">
		<!--<base target="_blank">-->
		<link rel="stylesheet" href="engine/frontend/index.css">
		<link rel="shortcut icon" href="content/favicon.ico">
		<!--RWRK://WorkInProgress--><meta http-equiv="cache-control" content="no-cache"/><!--RWRK://WorkInProgress-->
		<?php require('content/config.php'); ?>
		<title><?php echo "$siteHello"; ?> <?php echo "$serverName"; ?></title>
	</head>
	<body>
		<content>
		<a href="./index.php"><img id='logo' src="content/logo.png" alt="logo"></a>
		<h1><?php echo "$siteHello"; ?> <b><?php echo "$serverName"; ?></b>!</h1>
		<h2><?php echo "$progressDesc"; ?></h2>
		<div id="progress">
			<span id="progress-bar" style='width: <?php echo "$progressSet"; ?>'><?php echo "$progressSet"; ?>&#8239;</span>
		</div>
		</content>
		<footer>
			Copyright &copy; <?php echo date("Y"); ?> <?php echo "$serverName"; ?>. Coded with <span id="rwrk_copyright_heart">♥</span> by <a href="https://fb.me/Raweryk" base target="_blank">Raweryk</a> in 2021.
		</footer>
	</body>
</html>