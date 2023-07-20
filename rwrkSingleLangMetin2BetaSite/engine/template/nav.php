<ul>
  <?php if (file_exists($rwrkIndex)) { echo "<li>
    <a href='./index.php'>$navIndex</a>
  </li>"; }
  if (file_exists($rwrkRegister)) { echo "<li>
    <a href='./register.php'>$navRegister</a>
  </li>"; }
  if (file_exists($rwrkDownload)) { echo "<li>
    <a href='./download.php'>$navDownload</a>
  </li>"; }
  if ($displayBoard == 1 || $displayFacebook == 1 || $displayDiscord == 1) { echo "<li>
    <span>$navSeparate</span>
  </li>"; }
  if ($displayBoard == 1) { echo "<li>
    <a href='$uriBoardURI'>$navBoard</a>
  </li>"; }
  if ($displayFacebook == 1) { echo "<li>
    <a href='$uriFacebookURI'>$navFacebook</a>
  </li>"; }
  if ($displayDiscord == 1) { echo "<li>
    <a href='$uriDiscordURI'>$navDiscord</a>
  </li>"; } ?>
</ul>
