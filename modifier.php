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

$id = $_POST['id'];
//Je récupère les variables modifiées
$modifnom =	$_POST['nom'];
$modifprenom = $_POST['prenom'];
$modifmail = $_POST['mail'];
$modiftel = $_POST['tel'];
$modiftypeuser = $_POST['typeuser'];

if ($modiftypeuser == 'Super Admin') {
	$modiftypeuserl = 1;
}elseif ($modiftypeuser == 'Administrateur') {
	$modiftypeuserl = 2;
}elseif ($modiftypeuser == 'Client') {
	$modiftypeuserl = 3;
}


	//On verifie le mail
if(empty($_POST['mail']) || !filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){

echo '<SCRIPT LANGUAGE="JavaScript">
		window.location.replace("gestion.php?Acces=Email");
	</SCRIPT>';
}else{
//Execution de la requète de modification
$requpdate = applicmodif($connect, $modifnom, $modifprenom, $modifmail, $modiftel, $modiftypeuserl, $id);

//retour sur la page
echo '<SCRIPT LANGUAGE="JavaScript">
		window.location.replace("gestion.php?Acces=Modifié");
	</SCRIPT>';

}
?>