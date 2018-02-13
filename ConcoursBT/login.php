<?php
	include_once "header.php";
?>

<body class="signup-page">
	<?php
	include_once "navbar.php";
	?>

    <div class="wrapper">
		<div class="header header-filter" style="background-image: url('assets/img/haley-powers-370161.jpg'); background-size: cover; background-position: top center;">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
						<div class="card card-signup">
							<form class="form" method="POST" action="logging.php">
								<div class="header header-warning text-center">
									<h4>Se connecter</h4>
									<div class="social-line">
										<a href="#pabloescobar" class="btn btn-simple btn-just-icon">
											<i class="fa fa-facebook-square"></i>
										</a>
										<a href="#pabloescobar" class="btn btn-simple btn-just-icon">
											<i class="fa fa-twitter"></i>
										</a>
										<a href="#pabloescobar" class="btn btn-simple btn-just-icon">
											<i class="fa fa-google-plus"></i>
										</a>
									</div>
								</div>
								<?php
									if (isset($_POST['message']))
									{
										echo '<p class="text-divider"><font color="green">'.$_POST['message'].'</font></p>';
									}
									else
									{
										echo '<a href="passwordforgot.php"><p class="text-divider">Mot de passe oublié ?</p></a>';
									}
									if (isset($_POST['message2']))
									{
										echo '<p class="text-divider"><font color="red">'.$_POST['message2'].'</font></p>';
									}
								?>

								<div class="content">

									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">email</i>
										</span>
										<input type="text" class="form-control" name="pseudo" placeholder="Email ou pseudo..." required>
									</div>

									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">lock_outline</i>
										</span>
										<input type="password" class="form-control" name="password" placeholder="Mot de passe..."  required/>
									</div>

								</div>
								<div class="footer text-center">
									<input type="submit" class="btn btn-simple btn-warning btn-lg" value="Connexion">
								</div>
							</form>

							<div class="footer text-center">
								<a href="register.php" class="btn btn-simple btn-warning btn-lg">Pas encore de compte ?</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<?php
				include_once "footer.php";
			?>

		</div>

    </div>


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

</html>
