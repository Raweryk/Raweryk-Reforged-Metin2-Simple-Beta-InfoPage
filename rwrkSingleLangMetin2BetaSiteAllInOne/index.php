<!DOCTYPE html>
<html lang='pl'>
	<head>
		<?php require ('engine/root/kernel.php');
		echo "$boot";?>
	</head>
	<body>
	<div id="rwrkPreloader">
		<div id="rwrkLoading">
			<hr/><hr/><hr/><hr/>
		</div>
	</div>
		<nav>
			<ul>
				<li>
					<a href="#index"><?php echo "$navIndex"; ?></a>
				</li>
				<li>
					<a href="#register"><?php echo "$navRegister"; ?></a>
				</li>
				<li>
					<a href="#download"><?php echo "$navDownload"; ?></a>
				</li>
				<?php if($displayBoard == 1 || $displayDiscord == 1 || $displayFacebook == 1) {
					echo "<li>$navSeparate</li>"; }
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
			<section id="index">
			<img src='content/logo.png' alt='logo'/>
				<h1><?php echo "$coreServerHello"; ?> <b><?php echo "$coreServerName"; ?></b>!</h1>
				<h2><?php echo "$sysServerDesc"; ?></h2>
			</section>
			<section id="register">
				<div id="regForm">
			  	<form action="index.php" method="post">
			    	<table>
							<tr>
			       		<td><?php echo "$regLogin"; ?></td>
		            <td><input required type="text" name="username"></td>
		         	</tr>
			        <tr>
			        	<td><?php echo "$regPass"; ?></td>
								<td><input placeholder="••••••••" title="Must be at least 8 characters" pattern="[a-zA-Z0-9]{8,}" id="password" required type="password" name="password"></td>
			        </tr>
			        <tr>
			          <td><?php echo "$regDelete"; ?></td>
			          <td><input required type="text" name="kasowanie_postaci" minlength="7" maxlength="7"></td>
			        </tr>
			        <tr>
			          <td><?php echo "$regMail"; ?></td>
								<td><input pattern="[A-Za-z0-9._+-]+@[A-Za-z0-9 -]+\.[a-z]{2,}" id="email" required type="email" title="must be a valid email address" name="email"></td>
			        </tr><!--
							<tr>
			          <td><?php echo "$regMailVerify"; ?></td>
			          <td><input required type="text" name="email verify"></td>
			        </tr>-->
							<?php if($enablePin == 1) { echo"<tr>
								<td>$regPin</td>
								<td><input required type='text' name='pin'></td>
								<td>$regPinRandom</td>
							</tr>";} ?>
			        <tr>
			          <td><?php echo "$regName"; ?></td>
			          <td><input required type="text" name="rl_name"></td>
			        </tr>
			        <tr align="center">
			          <td colspan="2">
			          	<input class="submit" type="submit" name="submit" value='<?php echo "$regSign";?>'>
			            <input class="clear" type="reset" value="<?php echo "$regClear";?>">
			          </td>
			        </tr>
			    	</table>
			  	</form>
			  </div>
			</section>
			<section id="download">
						<a href='/content/<?php echo "$fileName"?>' download><button><?php echo "$coreButtonDescD"; ?></button></a>
			</section>
		</content>
		<footer>
			Copyright &copy; <?php echo date("Y"); ?> <span><?php echo "$coreServerName"; ?></span>. Coded with <span id='rwrk_copyright_heart'>♥</span> by <a data-tooltip="Olaf `Raweryk` Zalewski" href='https://fb.me/Raweryk' base target='_blank'>Raweryk</a> in 2022.
		</footer>
	</body>
	<script>
		window.onload = function(){
			<?php if ($disablePreloader == 1) { echo "//" ; } ?>document.querySelector("#rwrkPreloader").style.display = "none";
		}
	</script>
</html>
