<?php

include_once 'bdd.php';

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
$connect = BaseDeDonnees();
$id = $_GET['IDUser'];
$modifierMembre = modifierMembre($connect,$id);
$recuptype = typeuser($connect);

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>BelleTable &mdash; Admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!--
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE
	DESIGNED & DEVELOPED by FREEHTML5.CO

	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="css/flexslider.css">

	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/modif.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-header">
			<header id="fh5co-header-section">
				<div class="container">
					<div class="nav-header">
						<a href="index.php" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<h1 id="fh5co-logo"><a href="index.php"><img src="images/logobt.png" width="60px"> BELLETABLE</a></h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li>
									<a href="index.php">Accueil</a>
								</li>
								<li><a href="produits.php">Produits</a></li>
								<li><a href="client.php">Espace client</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <?php
                                if ($typeuser == 1 ||$typeuser == 2){
                                 echo "<li><a class='active' href='gestion.php'>Administration</a></li>";
								}
								if (isset($_SESSION['login'])){
									echo "<li><a href = 'deconnexion.php'><img src='images/deconnect.png' width='20px'></a></li>";
								}
                                ?>
							</ul>
						</nav>
					</div>
				</div>
			</header>
		</div>
		<!-- end:fh5co-header -->
		<aside id="fh5co-hero" class="js-fullheight">
			<div class="flexslider js-fullheight">
				<ul class="slides">
			   	<li style="background-image: url(images/principal.jpg);">
			   		<div class="overlay-gradient"></div>
			   		<div class="container">
			   		<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
			   				<div class="slider-text-inner desc">
                                   <h2 class="heading-section">Modifier l'utilisateur <?php echo $modifierMembre[0]['prenom']." ".$modifierMembre[0]['nom'] ?></h2>
                            </div>
                    </div>
                    </div>
                </li>
                </ul>
            </div>
        </aside>
		<div id="fh5co-team-section">
			<div class="container"
			<div class="row">
				<center><h2 style="margin-top: 1%;">Entrer les nouvelles informations</h2></center>
				<form class="formulaire" action="modifier.php" method="POST">
					<?php
					for ($i = 0; $i < sizeof($modifierMembre); $i++)
				  	{
				  		$typeuti = $modifierMembre[$i]['type_user'];
				  		if ($typeuti==1) {
					  	$typeutil = 'Super Admin';
					  }
					  else if ($typeuti==2) {
					  	$typeutil = 'Administrateur';
					  }
					  else if ($typeuti==3) {
					  	$typeutil = 'Client';
					  }
					}
	    		echo '<center><input type="text" name="nom" value='.$modifierMembre[0]['nom'].'>
	    		<br><br>
	    		<input type="text" name="prenom" value='.$modifierMembre[0]['prenom'].'>
	    		<br><br>
	    		<input type="text" name="mail" value='.$modifierMembre[0]['email'].'>
	    		<br><br>
	    		<input type="text" name="tel" value='.$modifierMembre[0]['tel'].'>
	    		<br><br>
		      	<select name="typeuser" style="font-size:20px; width:auto;">
		      			<option selected>'.$typeutil.'</option>';
		      		
		      		for ($i=0; $i < sizeof($recuptype) ; $i++) { 
		      			if ($recuptype[$i]['typeuti'] == $typeutil)
		      			{

		      			}
		      			else
		      			echo '<option>'.$recuptype[$i]['typeuti'].'</option>';
		      		}
        			echo "<input type='hidden' value=".$id." name='id'>";
					?>
				</select><br><br>

				<button type="submit" class="btn btn-warning" name="modif">Modifier</button>
			</form>
			</div>
        </div>
        </div>

		<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

    </body>
</html>
