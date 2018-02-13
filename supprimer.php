<?php

include_once 'bdd.php';
$connect = BaseDeDonnees();
@session_start();

if (!isset($_SESSION['login'])) // Si je suis un petit malin et que j'essaye d'arriver sur cette page alors que je ne suis pas connecté...
{
	exit(header("Location:client.php")); // Je me redirige vers la page de connexion
}
$nom = $_SESSION['nom']; // Grâce à session_start, mes variables SESSION sont des variables qui peuvent naviguer partout (en terme de pages)
$prenom = $_SESSION['prenom'];
$email = $_SESSION['email'];
$tel = $_SESSION['tel'];
$typeuser = $_SESSION['type_user'];

if ($typeuser != '1' && $typeuser != '2') // Si je suis un petit malin et que j'essaye d'arriver sur cette page alors que je ne suis pas administrateur...
{
	exit(header("Location:espacemembre.php")); // Je me redirige vers la page de connexion...
}
// Je récupère lid de l'utilisateur séléctionné
$id = $_GET['IDUser'];

//Execution de la requète de suppression
$supprimer = suppMembre($connect, $id);

//Renvoi vers la page d'administration
echo '<SCRIPT LANGUAGE="JavaScript">
		window.location.replace("gestion.php?Acces=Supprimé");
	</SCRIPT>';

?>