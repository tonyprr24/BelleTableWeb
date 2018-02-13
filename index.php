<?php

@session_start();

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>BelleTable</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

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
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<link rel="stylesheet" href="css/style.css">


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
									<a class="active" href="index.php">Accueil</a>
								</li>
								<li><a href="produits.php">Produits</a></li>
								<li><a href="client.php">Espace Client</a></li>
								<li><a href="contact.php">Contact</a></li>
								<?php
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
			   	<li style="background-image: url(images/slide_1.jpg);">
			   		<div class="overlay-gradient"></div>
			   		<div class="container">
			   			<div class="col-md-5 col-sm-6 col-xs-12 js-fullheight slider-text">
			   				<div class="slider-text-inner">
			   					<div class="desc">
			   						<h2>Montrer votre talent ! <small><font color="white"><i>Concours BELLETABLE</i></font></small></h2>
			   						<p><a href="ConcoursBT/" class="btn btn-primary btn-outline">Accéder à la page du concours</a></p>
			   					</div>
			   				</div>
			   			</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/slide_2.jpg);">
			   		<div class="overlay-gradient"></div>
			   		<div class="container">
			   			<div class="col-md-5 col-sm-6 col-xs-12 js-fullheight slider-text">
			   				<div class="slider-text-inner">
			   					<div class="desc">
			   						<h2>Nouvelle collection 2018</h2>
			   						<p><a href="#" class="btn btn-primary btn-outline">Voir détails</a></p>
			   					</div>
			   				</div>
			   			</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/slide_3.jpg);">
			   		<div class="overlay-gradient"></div>
			   		<div class="container">
			   			<div class="col-md-5 col-sm-6 col-xs-12 js-fullheight slider-text">
			   				<div class="slider-text-inner">
			   					<div class="desc">
			   						<h2>Voyage au coeur de la nature !</h2>
			   						<p><a href="#" class="btn btn-primary btn-outline">Voir détails</a></p>
			   					</div>
			   				</div>
			   			</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		<div id="fh5co-section">
			<div class="grid-project-section">
				<a href="#">
					<img src="images/project-1.jpg" alt="Project" class="img-responsive">
					<div class="desc text-center">
						<h2>Tables</h2>
					</div>
				</a>
			</div>
			<div class="grid-project-section">
				<a href="#">
					<img src="images/project-2.jpg" alt="Project" class="img-responsive">
					<div class="desc text-center">
						<h2>Couverts</h2>
					</div>
				</a>
			</div>
			<div class="grid-project-section">
				<a href="#">
					<img src="images/project-3.jpg" alt="Project" class="img-responsive">
					<div class="desc text-center">
						<h2>Salles</h2>
					</div>
				</a>
			</div>
		</div>
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<h3 class="section-title">Qui sommes nous ?</h3>
							<p>BELLETABLE propose un service complet avec la location de salles de reception incluant la livraison, la mise en place des tables, l’installation des divers matériels, le service à table, lavage de la vaisselle et du linge. Aucune autre société ne propose un service aussi complet et haut de gamme avec des articles de la table de luxe.</p>
						</div>

						<div class="col-md-3">
							<h3 class="section-title">Nos services</h3>
							<ul>
								<li>Évènements</li>
								<li>Ventes de produits</li>
								<li>Location de matériels</li>
								<li>Réservation de salle</li>
							</ul>
						</div>

						<div class="col-md-3">
							<h3 class="section-title">Adresses</h3>
							<ul class="contact-info">
								<li><i class="icon-map2"></i>000 Avenue des Champs-Elysées, Paris 75008</li>
								<li><i class="icon-phone2"></i>+33(0) 1 01 01 01 01</li>
								<li><i class="icon-envelope2"></i><a href="#">tpereira@belletable.fr</a></li>
								<li><i class="icon-globe2"></i><a href="www.tpereira.ovh/Belletable">www.tpereira.ovh/Belletable</a></li>
							</ul>
						</div>
						<div class="col-md-3">
							<h3 class="section-title">Laisser un message</h3>
							<form class="contact-form">
								<div class="form-group">
									<label for="name" class="sr-only">Nom</label>
									<input type="name" class="form-control" id="name" placeholder="Nom">
								</div>
								<div class="form-group">
									<label for="email" class="sr-only">Email</label>
									<input type="email" class="form-control" id="email" placeholder="Email">
								</div>
								<div class="form-group">
									<label for="message" class="sr-only">Message</label>
									<textarea class="form-control" id="message" rows="7" placeholder="Message"></textarea>
								</div>
								<div class="form-group">
									<input type="submit" id="btn-submit" class="btn btn-send-message btn-md" value="Envoyer">
								</div>
							</form>
						</div>
					</div>
					<div class="row copy-right">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-facebook2"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
								<a href="#"><i class="icon-dribbble2"></i></a>
								<a href="#"><i class="icon-youtube"></i></a>
							</p>
							<p>&copy; 2018 <a href="#">BelleTable</a>. All Rights Reserved. <br>Made with <i class="icon-heart3"></i> by <a href="http://tpereira.ovh/" target="_blank">Tony PEREIRA</a> / Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash </a>,<a href="https://pexels.com/" target="_blank"> Pexels</a> <br> Colored Icons: <a href="http://flaticon.com" target="_blank">Flaticon</a></p>
						</div>
					</div>
				</div>
			</div>
		</footer>


	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


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
