<!DOCTYPE html>
<html lang='pl'>
	<head>
		<?php require('content/language.php'); ?>
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
		<title><?php echo "$serverHello"; ?> <?php echo "$serverName"; ?></title>
	</head>
	<body>
		<nav>
			<ul>
				<li>
					<a href='./index.php' id='navSelected'>Strona Główna</a>
				</li>
				<li>
					<a href='./register.php'>Rejestracja</a>
				</li>
				<li>
					<a href='./download.php'>Pobierz</a>
				</li>
				<li>
					<a href='#'>Forum</a>
				</li>
				<li>
					<a href='<?php echo "$facebookURI"; ?>'>Fanpage</a>
				</li>
				<li>
					<a href='<?php echo "$discordURI"; ?>'>Discord</a>
				</li>
			</ul>
		</nav>
		<!--RWRK://WorkInProgress--><div id='rwrk_wipInfo'>Prace w toku</div><!--RWRK://WorkInProgress-->
		<!--RWRK://WorkInProgress--><div id='rwrk_verRID'>vB01</div><!--RWRK://WorkInProgress-->
		<content>
		<a href='./index.php'><img src='content/logo.png' alt='logo'/></a>
		<h1><?php echo "$serverHello"; ?> <b><?php echo "$serverName"; ?></b>!</h1>
		<h2><?php echo "$serverDesc"; ?></h2>
		<hr/>
		<br/>
		<a href='./register.php'><button><?php echo "$buttonDesc"; ?></button></a>
		<p><?php echo "$underButtonINFO"; ?> <a href='./pobierz.php'><?php echo "$underButtonURI"; ?></a></p>
		</content>
		<footer>
			Copyright &copy; 2021 <?php echo "$serverName"; ?>. Coded with <span id='rwrk_copyright_heart'>♥</span> by <a href='https://fb.me/Raweryk' base target='_blank'>Raweryk</a> in 2021. 
		</footer>
	</body>
</html>