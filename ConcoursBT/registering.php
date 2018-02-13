<?php
  include_once "bdd.php";
  $bdd = connexion_base();

  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $pseudo = $_POST['pseudo'];
  $type = $_POST['radioType'];
  $mail = $_POST['mail'];
  $password1 = $_POST['password'];
  $password2 = $_POST['passwordConfirm'];

  $users = users($bdd);

  for ($i = 0; $i < sizeof($users); $i++)
  {
    if ($pseudo == $users[$i]['Pseudo'])
    {
      echo
      '<form method="POST" action="register.php" id="envoiMessage">
      <input type="hidden" name="message" value="Ce pseudo existe déjà.">
      <script type="text/javascript">
      document.getElementById("envoiMessage").submit();
      </script>
      </form>';
    }
    else if ($mail == $users[$i]['Mail'])
    {
      echo
      '<form method="POST" action="register.php" id="envoiMessage">
      <input type="hidden" name="message" value="Cet email est déjà enregistré.">
      <script type="text/javascript">
      document.getElementById("envoiMessage").submit();
      </script>
      </form>';
    }
  }

  if ($password1 != $password2)
  {
    echo
    '<form method="POST" action="register.php" id="envoiMessage">
    <input type="hidden" name="message" value="Les mots de passe ne correspondent pas !">
    <script type="text/javascript">
    document.getElementById("envoiMessage").submit();
    </script>
    </form>';
  }
  else
  {
    $password = hash('sha512', $_POST['password']);
    $registering = registering($bdd, $nom, $prenom, $mail, $pseudo, $type, $password);
    echo
    '<form method="POST" action="login.php" id="envoiMessage">
    <input type="hidden" name="message" value="Votre compte a bien été créé ! Vous pouvez vous connecter.">
    <script type="text/javascript">
    document.getElementById("envoiMessage").submit();
    </script>
    </form>';
  }


?>
