<?php
  include_once "bdd.php";
  $bdd = connexion_base();

  $pseudo = $_POST['pseudo'];
  $password = hash('sha512', $_POST['password']);

  $logging = logging($bdd, $pseudo, $password);

  if (sizeof($logging) <= 0)
  {
    echo
    '<form method="POST" action="login.php" id="envoiMessage">
    <input type="hidden" name="message2" value="Pseudo/Email ou mot de passe incorrect.">
    <script type="text/javascript">
    document.getElementById("envoiMessage").submit();
    </script>
    </form>';
  }
  else
  {
    session_start();
    $_SESSION['IDUser'] = $logging[0]['IDUser'];
    $_SESSION['Nom'] = $logging[0]['Nom'];
    $_SESSION['Prenom'] = $logging[0]['Prenom'];
    $_SESSION['Mail'] = $logging[0]['Mail'];
    $_SESSION['Pseudo'] = $logging[0]['Pseudo'];
    $_SESSION['Type'] = $logging[0]['Type'];
    $_SESSION['Password'] = $logging[0]['Password'];

    if ($logging[0]['Type'] == 1)
    {
      header('Location: public.php');
    }
    else if ($logging[0]['Type'] == 2)
    {
      header('Location: artistes.php');
    }
    else
    {
      header('Location: public.php');
    }

  }
?>
