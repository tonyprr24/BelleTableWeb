<?php

function BaseDeDonnees()
{
  try {
    $connect = new PDO('mysql:host=localhost;dbname=belletable','root','');
	$connect->exec("SET NAMES UTF8");
  } catch(PDOException $e) {
    echo "Erreur de connexion";
  }
  return $connect;
}

function Inscrire($connect,$nom,$prenom,$mail,$tel,$idf,$cryptage)
{
	try{
		$req = "INSERT INTO membrebt (nom,prenom,email,tel,idf,mdp,type_user) VALUES ('".$nom."','".$prenom."','".$mail."','".$tel."','".$idf."','".$cryptage."','3');";
		$pre = $connect->prepare($req);
    	$pre->execute();

    	return $pre;
	}catch (PDOException $e) {
        die('Erreur : ' . $e->getMessage());
     }

}

function SeConnecter($connect,$idf,$cryptageco)
{
  try {
    $req = "SELECT * FROM membrebt WHERE idf = '$idf' AND mdp = '$cryptageco'";
    $pre = $connect->prepare($req);
    $pre->execute();
    $res = $pre->fetchAll(PDO::FETCH_ASSOC);
    return $res;
  } catch(PDOException $e) {
    echo "Erreur de connexion";
  }
}

function infoMembre($connect,$idf)
{
	try {
    $req = "SELECT * FROM membrebt WHERE idf ='$idf'";
    $pre = $connect->prepare($req);
    $pre->execute();
    $res = $pre->fetchAll(PDO::FETCH_ASSOC);
    return $res;
  } catch(PDOException $e) {
    echo "Erreur de connexion";
  }
}

function tableauMembre($connect)
{
  try {
    $req = "SELECT * FROM membrebt;";
    $pre = $connect->prepare($req);
    $pre->execute();
    $res = $pre->fetchAll(PDO::FETCH_ASSOC);
    return $res;
  } catch(PDOException $e) {
    echo "Erreur de connexion";
  }
}

function modifierMembre($connect,$id)
{
  try {
    $req = "SELECT * FROM membrebt WHERE id = '$id';";
    $pre = $connect->prepare($req);
    $pre->execute();
    $res = $pre->fetchAll(PDO::FETCH_ASSOC);
    return $res;
  } catch(PDOException $e) {
    echo "Erreur de connexion";
  }
}

function typeuser($connect)
{
  try {
    $req = "SELECT * FROM typebt ";
    $pre = $connect->prepare($req);
    $pre->execute();
    $res = $pre->fetchAll(PDO::FETCH_ASSOC);
    return $res;
  } catch(PDOException $e) {
    echo "Erreur de connexion";
  }
}

function applicmodif($connect, $modifnom, $modifprenom, $modifmail, $modiftel, $modiftypeuserl, $id)
{
  try {
    $req ="UPDATE membrebt SET nom ='$modifnom', prenom='$modifprenom', email='$modifmail',tel='$modiftel',type_user='$modiftypeuserl' WHERE id = $id";
    $pre = $connect->prepare($req);
    $pre->execute();
     $res = $pre->fetchAll(PDO::FETCH_ASSOC);
    return $res;    
  } catch (Exception $e) {
    
  }
}

function suppMembre($connect, $id)
{
  try {
    $req ="DELETE FROM membrebt WHERE id='$id'";
    $pre = $connect->prepare($req);
    $pre->execute();
     $res = $pre->fetchAll(PDO::FETCH_ASSOC);
    return $res;    
  } catch (Exception $e) {
    
  }
}




?>
