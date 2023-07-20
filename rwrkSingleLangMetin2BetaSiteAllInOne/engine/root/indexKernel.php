<?php
  $rwrkTitle = "System jest zajęty";
  $rwrkRaweryk = "Raweryk";
  $rwrkDesc = "System jest zajęty!";
  $rwrkBack = "Wciśnij tutaj, by powrócić";

  $rwrkTitleOffline = "Offline";
  $rwrkTitleError = "Error";

  $rwrkDescOffline = "Strona jest aktualnie wyłączona";
  $rwrkDescError = "Wystąpił krytyczny błąd techniczny uniemożliwiający wyświetlenie strony.";

  if(isset($_GET["offline"])) { $rwrkTitle = $rwrkTitleOffline; $rwrkDesc = $rwrkDescOffline; }
  if(isset($_GET["error"])) { $rwrkTitle = $rwrkTitleError; $rwrkDesc = $rwrkDescError; }
?>
