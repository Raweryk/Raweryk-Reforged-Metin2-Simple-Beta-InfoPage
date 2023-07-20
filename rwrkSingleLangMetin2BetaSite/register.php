<!DOCTYPE html>
<html lang='pl'>
	<head>
		<?php
			$siteSign = "register";
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
      <div id="regForm">
          <form action="index.php" method="post">
              <table>
                  <tr>
                      <td><?php echo "$regLogin"; ?></td>
                      <td><input title="" type="text" name="username"></td>
                  </tr>
                  <tr>
                      <td><?php echo "$regPass"; ?></td>
                      <td><input title="" type="password" name="password"></td>
                  </tr>
                  <tr>
                      <td><?php echo "$regDelete"; ?></td>
                      <td><input title="" type="text" name="kasowanie_postaci" maxlength="7"></td>
                  </tr>
                  <tr>
                      <td><?php echo "$regMail"; ?></td>
                      <td><input title="" type="text" name="email"></td>
                  </tr>
                  <tr>
                      <td><?php echo "$regName"; ?></td>
                      <td><input title="" type="text" name="rl_name"></td>
                  </tr>
                  <tr align="center">
                      <td colspan="2">
                          <input title="" type="submit" name="submit" value="Zarejestruj">
                          <input title="" type="reset" value="Wyczyść">
                      </td>
                  </tr>
              </table>
          </form>
      </div>
			<?php if (file_exists($rwrkDownload)) { echo "
			<p>$coreAssist <a href='./download.php'>$coreAssistLink</a></p>"; } ?>
		</main>
		<footer>
			<?php require('engine/frontend/template/footer.php'); ?>
		</footer>
	</body>
	<?php require('engine/frontend/template/preloaderScript.php'); ?>
</html>
