<?php
  session_start();

  session_destroy();
  echo "Vous avez bien été déconnecté.
  <br />
  <br />
  <a href='index.php'>Accueil</a>";
?>
