<!DOCTYPE html>
<html lang="pl">
	<head>
		<?php require('indexKernel.php');?>
		<meta charset="pl-PL.UTF-8">
		<link rel="icon" type="image/jpg" href="raweryk.jpg"/>
		<link rel="stylesheet" href="root.css">
		<title><?php echo "$rwrkTitle";?></title>
	</head>
	<body>
		<span class="rwrkError_Title"><?php echo "$rwrkRaweryk";?></span>
		<span class="rwrkError_Desc"><?php echo "$rwrkDesc";?></span>
		<span class="rwrkError_Link"><a href="#" onclick="history.back()"><?php echo "$rwrkBack";?><span class="rwrkError_Blink">_</span></a></span>
	</body>
</html>
