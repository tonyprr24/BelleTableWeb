<?php
	include_once "header.php";
?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Profile Page - Material Kit by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>

</head>

<body class="profile-page">

<?php
	include_once "navbar.php";
?>

    <div class="wrapper">
		<div class="header header-filter" style="background-image: url('assets/img/pageperso.jpg');"></div>

		<div class="main main-raised">
			<div class="profile-content">
	            <div class="container">
	                <div class="row">
	                    <div class="profile">
	                        <div class="avatar">
	                            <img src="assets/img/christian.jpg" alt="Circle Image" class="img-circle img-responsive img-raised">
	                        </div>
	                        <div class="name">
	                            <h3 class="title"><?php echo $_SESSION['Prenom'];?>&nbsp;<?php echo $_SESSION['Nom'];?></h3>
	                        </div>
	                    </div>
	                </div>
	                <div class="description text-center">
                        <p>Dans cette page, vous êtes libre de déposer vos oeuvres, musiques ou en encore vos vidéos. N'hésitez pas à mettre un maximun de contenus pour favoriser votre réputation ! </p>
	                </div><br>
	                <center><div class="row">
	                	<a href="upload.php"><button class="btn btn-primary btn-lg">Déposer une oeuvre</button></a>
	                </div></center>

					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<div class="profile-tabs">
			                    <div class="nav-align-center">
									<ul class="nav nav-pills" role="tablist">
										<li class="active">
											<a href="#video" role="tab" data-toggle="tab">
												<i class="material-icons">camera</i>
												Vidéos
											</a>
										</li>
										<li>
				                            <a href="#pics" role="tab" data-toggle="tab">
												<i class="material-icons">photo_camera</i>
												Photos
				                            </a>
				                        </li>
				                        <li>
				                            <a href="#art" role="tab" data-toggle="tab">
												<i class="material-icons">palette</i>
				                                Art
				                            </a>
				                        </li>
				                        <li>
				                            <a href="#song" role="tab" data-toggle="tab">
												<i class="material-icons">music_note</i>
				                                Musique
				                            </a>
				                        </li>
				                    </ul>

				                    <div class="tab-content gallery">
										<div class="tab-pane active" id="video">
				                            <div class="row">
												<div class="col-md-6">
													<img src="assets/img/examples/chris1.jpg" class="img-rounded" />
													<img src="assets/img/examples/chris0.jpg" class="img-rounded" />
												</div>
												<div class="col-md-6">
													<img src="assets/img/examples/chris3.jpg" class="img-rounded" />
													<img src="assets/img/examples/chris4.jpg" class="img-rounded" />
												</div>
				                            </div>
				                        </div>
				                        <div class="tab-pane text-center" id="pics">
											<div class="row">
												<div class="col-md-6">
													<img src="assets/img/examples/chris5.jpg" class="img-rounded" />
													<img src="assets/img/examples/chris7.jpg" class="img-rounded" />
													<img src="assets/img/examples/chris9.jpg" class="img-rounded" />
												</div>
												<div class="col-md-6">
													<img src="assets/img/examples/chris6.jpg" class="img-rounded" />
													<img src="assets/img/examples/chris8.jpg" class="img-rounded" />
												</div>
											</div>
				                        </div>
										<div class="tab-pane text-center" id="art">
											<div class="row">
												<div class="col-md-6">
													<img src="assets/img/examples/chris4.jpg" class="img-rounded" />
													<img src="assets/img/examples/chris6.jpg" class="img-rounded" />
												</div>
												<div class="col-md-6">
													<img src="assets/img/examples/chris7.jpg" class="img-rounded" />
													<img src="assets/img/examples/chris5.jpg" class="img-rounded" />
													<img src="assets/img/examples/chris9.jpg" class="img-rounded" />
												</div>
											</div>
				                        </div>
				                        <div class="tab-pane active" id="song">
				                            <div class="row">
												<div class="col-md-6">
													<img src="assets/img/examples/chris1.jpg" class="img-rounded" />
													<img src="assets/img/examples/chris0.jpg" class="img-rounded" />
												</div>
												<div class="col-md-6">
													<img src="assets/img/examples/chris3.jpg" class="img-rounded" />
													<img src="assets/img/examples/chris4.jpg" class="img-rounded" />
												</div>
				                            </div>
				                        </div>

				                    </div>
								</div>
							</div>
							<!-- End Profile Tabs -->
						</div>
	                </div>

	            </div>
	        </div>
		</div>
<?php
			include_once "footer.php";
		?>
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
