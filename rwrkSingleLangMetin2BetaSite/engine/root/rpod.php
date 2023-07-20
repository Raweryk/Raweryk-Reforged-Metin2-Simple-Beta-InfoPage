<?php
  switch (key($_GET)) {
    case 'siteError':
      $rwrkTitle = "Wystąpił błąd";
      $rwrkDesc = "Podczas próby załadowania strony, wystąpił krytyczny błąd techniczny uniemożliwiający poprawne jej wyświetlenie. Aplikacja została zanihilowana.";
      break;
    case 'siteOffline':
      $rwrkTitle = "Strona wyłączona";
      $rwrkDesc = "Rządana strona jest aktualnie wyłączona z użytkowania z powodu odbywających się prac technicznych nad nią. Aplikacja została zanihilowana.";
      break;
    case 'siteUnsigned':
      $rwrkTitle = "Niepodpisana strona";
      $rwrkDesc = "Rządana strona nie została właściwie podpisana przez administratorów, system nie jest w stanie jej poprawnie obsłużyć. Aplikacja została zanihilowana.";
      break;
    case 'kernelConnect':
      $rwrkTitle = "Nieobsługiwany Wyjątek";
      $rwrkDesc = "Podczas próby załadowania strony, wystąpił krytyczny błąd techniczny uniemożliwiający poprawne jej wyświetlenie. Aplikacja została zanihilowana.";
      break;
    default:
      header("Location: ./rpod.php?kernelConnect");
      break;
  }

  $rwrkHeader = "Raweryk";
  $rwrkLi1 = "Wciśnij przycisk 'wstecz' w przeglądarce.";
  $rwrkLi2 = "Spróbuj odwiedzić stronę później.";
  $rwrkLink = "Wciśnij tutaj, by powrócić";
  $rwrkCSS = "root";
  $rwrkFavicon = "raweryk.jpg";
  $rwrkTimeout = "600";
?>
<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="pl-PL.UTF-8">
		<meta http-equiv='refresh' content='<?php echo "$rwrkTimeout";?>;url=../../'/>
		<link rel="icon" type="image/jpg" href="<?php echo "$rwrkFavicon";?>"/>
		<link rel="stylesheet" href="<?php echo "$rwrkCSS.css";?>">
		<title><?php echo "$rwrkTitle";?></title>
	</head>
	<body>
		<span id="rwrkHeader"><?php echo "$rwrkHeader";?></span>
		<span id="rwrkDesc"><?php echo "$rwrkDesc";?><br/>
		</span>
		<ul>
			<li><?php echo "$rwrkLi1";?></li>
			<li><?php echo "$rwrkLi2";?></li>
		</ul>
		<span id="rwrkLink"><a href="#" onclick="history.back()"><?php echo "$rwrkLink";?> <span id="rwrkBlink">_</span></a></span>
	</body>
</html>
