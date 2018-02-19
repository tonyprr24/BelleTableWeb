<?php
  session_start();

  session_destroy();
?>
<?php
	include_once "header.php";
?>

<body class="tutorial-page">

<?php
	include_once "navbar.php";
?>

<div class="wrapper">
	<div class="header header-filter" style="background-image: url('assets/img/deconnexion.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<h1 class="title text-center">Déconnexion</h1>
				</div>
			</div>
		</div>
	</div>

	<div class="main main-raised">
		<div class="section">
	    <div class="container">

	                <h2 class="text-center">Déconnexion</h2>
	                <legend></legend>
	                <div class="col-md-8 col-md-offset-2">
                    <br />
                    <p class="text-center">Vous avez bien été déconnecté.</p>
                    <p class="text-center"><a href="index.php">Retourner à la page d'accueil</a></p>
                  </div>

	        </div>
	    </div>
	</div>

</div>

<?php
  include_once "footer.php";
 ?>

</body>
	<!--   Core JS Files   -->
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/material.min.js"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="assets/js/nouislider.min.js" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="assets/js/material-kit.js" type="text/javascript"></script>

	<script>

		$().ready(function(){

			$(window).on('scroll', materialKit.checkScrollForTransparentNavbar);

		});

</script>
</html>
