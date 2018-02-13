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
							<form class="form" method="POST" action="registering.php">
								<div class="header header-warning text-center">
									<h4>S'inscrire</h4>
									<div class="social-line">
										<a href="#pablo" class="btn btn-simple btn-just-icon">
											<i class="fa fa-facebook-square"></i>
										</a>
										<a href="#pablo" class="btn btn-simple btn-just-icon">
											<i class="fa fa-twitter"></i>
										</a>
										<a href="#pablo" class="btn btn-simple btn-just-icon">
											<i class="fa fa-google-plus"></i>
										</a>
									</div>
								</div>
								<?php
									if (isset($_POST['message']))
									{
										echo "<p class='text-divider'><font color='red'>".$_POST['message']."</font></p>";
									}
									else
									{
										echo "<p class='text-divider'>Inscription classique</p>";
									}
								?>
								<div class="content">

									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">perm_identity</i>
										</span>
										<input type="text" class="form-control" name="nom" placeholder="Nom..." required>
									</div>

									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">person</i>
										</span>
										<input type="text" class="form-control" name="prenom" placeholder="Prénom..." required>
									</div>

									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">account_circle</i>
										</span>
										<input type="text" class="form-control" name="pseudo" placeholder="Pseudo..." required>
									</div>

								<center>
									<div class="radio">
										<label>
											<input type="radio" name="radioType" value="1" checked="true">
											Je suis un membre
										</label>
									</div>

									<div class="radio">
										<label>
											<input type="radio" name="radioType" value="2">
											Je suis un artiste
										</label>
									</div>
								</center>

									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">email</i>
										</span>
										<input type="email" class="form-control" name="mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Veuillez entrer une adresse mail valide !" placeholder="Email..." required>
									</div>

									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">lock_outline</i>
										</span>
										<input type="password" class="form-control" name="password" pattern=".{6,}" title="Au moins 6 caractères." placeholder="Mot de passe..." required/>
									</div>

									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">lock_outline</i>
										</span>
										<input type="password" class="form-control" name="passwordConfirm" pattern=".{6,}" title="Au moins 6 caractères" placeholder="Confirmez le mot de passe..." required/>
									</div>

								</div>
								<div class="footer text-center">
									<input type="submit" class="btn btn-simple btn-warning btn-lg" value="Inscription">
								</div>
							</form>

							<div class="footer text-center">
								<a href="login.php" class="btn btn-simple btn-warning btn-lg">Déjà un compte ?</a>
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
