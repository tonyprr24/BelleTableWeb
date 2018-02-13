<?php

include_once 'bdd.php';

$connect = BaseDeDonnees();

//On récupère les info que l'utilisateur à rentré pour l'inscription

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mail = $_POST['mail'];
$tel = $_POST['tel'];
$idf = $_POST['idf'];
$mdp = $_POST['mdp'];

//L'utilisateur doit respecter des conditions afin de s'inscrire

$verif = 0;

	//On verifie le mail
if(empty($_POST['mail']) || !filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){

echo '<SCRIPT LANGUAGE="JavaScript">
		window.location.replace("inscription.php?Acces=Email");
	</SCRIPT>';

	$verif = 1;

	return $verif;
	
	//On vérifie la confirmation du mail
}elseif(empty($_POST['mail']) || $_POST['mail'] != $_POST['confmail']){

echo '<SCRIPT LANGUAGE="JavaScript">
		window.location.replace("inscription.php?Acces=ConfEmail");
	</SCRIPT>';

	$verif = 1;

	return $verif;
	
	//On vérifie si le mot de passe contient les condition ci-dessous
}elseif (!preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W)#', $mdp)) {

echo '<SCRIPT LANGUAGE="JavaScript">
		window.location.replace("inscription.php?Acces=MDP");
	</SCRIPT>';

	$verif = 1;

	return $verif;

	//On vérifie la confirmation du mdp
}elseif(empty($_POST['mdp']) || $_POST['mdp'] != $_POST['confmdp']){

echo '<SCRIPT LANGUAGE="JavaScript">
		window.location.replace("inscription.php?Acces=ConfMDP");
	</SCRIPT>';

	$verif = 1;

	return $verif;

}else{

	// On crypte le MDP que l'utilisateur a saisi

	//On utilise une cle de cryptage

	$cryptage = sha1($mdp);


// On rentre les info de l'utilisateur dans la BDD

$inscription = Inscrire($connect,$nom,$prenom,$mail,$tel,$idf,$cryptage);

echo '<SCRIPT LANGUAGE="JavaScript">
		window.location.replace("client.php?Acces=Inscris");
	</SCRIPT>';
	}





?>