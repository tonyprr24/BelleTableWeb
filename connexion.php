<?php

include_once 'bdd.php';

$connect = BaseDeDonnees();

//On déclare les variables saisis précedement
$idf = $_POST['idf'];
$mdp = $_POST['mdp'];

//On crypte une fois de plus le MDP

$cryptageco = sha1($mdp);

//On éxécute la requête pour vérifier si les infos renseignées sont les mêmes que dans la BDD

$connexion = SeConnecter($connect,$idf,$cryptageco); // Grâce à la page incluse 'bdd.php', je fais appel à ma fonction 'SeConnecter (comprenant 3 paramètres)' qui est une fonction qui va permettre de vérifier si la tentative de connexion est bonne.

if (sizeof($connexion) > 0) { // Si la requête SQL retourne + que 0 résultat (ça veut dire que la connexion est réussie)
    session_start(); // Ca veut dire que j'ai trouvé mon compte, alors je démarre la session
    $_SESSION['login'] = $idf; // Et dans des variables sessions, je vais stocker le login
    $_SESSION['pwd'] = $cryptageco; // Le mdp
	$login = $_SESSION['login']; // (Je stocke ici ma variable session dans une variable normale)
    $leMembre = infoMembre($connect,$login); // (Comme ça je vais l'utiliser pour exécuter ma seconde requête SQL qui va trouver toutes les informations du compte associé, dont le nom, prénom...)
	$_SESSION['nom'] = $leMembre[0]['nom']; // Le nom
	$_SESSION['prenom'] = $leMembre[0]['prenom']; // Le prénom
    $_SESSION['email'] = $leMembre[0]['email']; //l'email
    $_SESSION['tel'] = $leMembre[0]['tel'];//le téléphone
    $_SESSION['type_user'] = $leMembre[0]['type_user'];//le type d'utilisateur

    $redirection = "espacemembre.php"; // Par anticipation, je stocke dans cette variable, la redirection vers l'interface utilisateur
	echo '<SCRIPT LANGUAGE="JavaScript">
		window.location.replace("'.$redirection.'");
	</SCRIPT>'; // Je fais la redirection en JavaScript.
} else { // Sinon ça veut dire que je n'ai pas réussi à me connecter, donc je retourne dans un getter nommé Acces un False (nommé Incorrect)
	echo '<SCRIPT LANGUAGE="JavaScript">
		window.location.replace("client.php?Acces=Incorrect");
    </SCRIPT>';

}


?>