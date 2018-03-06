<?php
	include_once "header.php";
?>

<body class="index-page">

<?php
	include_once "navbar.php";
?>

<div class="wrapper">
	<div class="header header-yellow" style="background-image: url('assets/img/bgyellow.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="brand">
						<h1>BELLETABLE</h1>
						<h3>Organise désormais des concours afin de regrouper et mettre en avant les jeunes talents</h3>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="main main-raised">
		<div class="section section-basic">
	    	<div class="container">
	            <div class="title">
	                <center><h2>Présentation</h2></center>
	            </div>
	            <center><div class="card card-nav-tabs" style="width: 70%;">
							<div class="header header-warning">
								<!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
								<div class="nav-tabs-navigation">
									<div class="nav-tabs-wrapper">
										<ul class="nav nav-tabs" data-tabs="tabs">
											<li class="active">
												<a href="#profile" data-toggle="tab">
													<i class="material-icons">stars</i>
													Objectif
												</a>
											</li>
											<li>
												<a href="#messages" data-toggle="tab">
													<i class="material-icons">videocam</i>
													Vidéo
												</a>
											</li>
											<li>
												<a href="#settings" data-toggle="tab">
													<i class="material-icons">location_city</i>
													Partenaires
												</a>

											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="content">
								<div class="tab-content text-center">
									<div class="tab-pane active" id="profile">
										<p>L'entreprise BELLETABLE à décidé de sponsoriser les jeunes talents dans divers domaines artistiques :
											<b>Musique, vidéo, image</b> ou encore <b>l'écriture</b>. Le but est de pouvoir valoriser votre talent afin de vous faire connaître
											auprès de la population francophone. Alors n'attendez plus, montrez-nous votre talent !
											<i class="material-icons">sentiment_very_satisfied</i></p>
									</div>
									<div class="tab-pane" id="messages">
										 <video class="responsive-video" controls width="100%">
    									<source src="assets/video/movie.mp4" type="video/mp4">
  										</video>
									</div>
									<div class="tab-pane" id="settings">
										<br>
										<img src="assets/img/partenaire/adami.jpg" width="140px">
										<img src="assets/img/partenaire/m6.png" width="100px" style="padding-left: 20px;">
										<img src="assets/img/partenaire/opera.jpg" width="130px" style="padding-left: 20px;">
										<img src="assets/img/partenaire/sony.jpg" width="100px" style="padding-left: 20px;">
									</div>
								</div>
							</div>
						</div></center>
						<div class="title" style="margin-bottom: 0px;">
						<center><h3>Faites votre show dans des salles mythiques de France</h3></center>
					</div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
					<div class="section" id="carousel">

						<!-- Carousel Card -->
						<div class="card card-raised card-carousel">
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
								<div class="carousel slide" data-ride="carousel">

									<!-- Indicators -->
									<ol class="carousel-indicators">
										<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
										<li data-target="#carousel-example-generic" data-slide-to="1"></li>
										<li data-target="#carousel-example-generic" data-slide-to="2"></li>
									</ol>

									<!-- Wrapper for slides -->
									<div class="carousel-inner">
										<div class="item active">
											<img src="assets/img/salles/operaparis.jpg" alt="Awesome Image">
											<div class="carousel-caption">
												<h4><i class="material-icons">location_on</i> Opéra de Paris, France</h4>
											</div>
										</div>
										<div class="item">
											<img src="assets/img/salles/celestins.jpg" alt="Awesome Image">
											<div class="carousel-caption">
												<h4><i class="material-icons">location_on</i> Théatre Célestins de Lyon, France</h4>
											</div>
										</div>
										<div class="item">
											<img src="assets/img/salles/auditorium.png" alt="Awesome Image">
											<div class="carousel-caption">
												<h4><i class="material-icons">location_on</i> Auditorium de Bordeaux, France </h4>
											</div>
										</div>
									</div>

									<!-- Controls -->
									<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
										<i class="material-icons">keyboard_arrow_left</i>
									</a>
									<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
										<i class="material-icons">keyboard_arrow_right</i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
	    	</div>
	    </div>
					</div>
				</div>
			</div>
		</div>

	</div>
    <?php
			include_once "footer.php";
		 ?>
</div>

<!-- Sart Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					<i class="material-icons">clear</i>
				</button>
				<h4 class="modal-title">Modal title</h4>
			</div>
			<div class="modal-body">
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
				</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default btn-simple">Nice Button</button>
				<button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!--  End Modal -->


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

	<script type="text/javascript">

		$().ready(function(){
			// the body of this function is in assets/material-kit.js
			materialKit.initSliders();
            window_width = $(window).width();

            if (window_width >= 992){
                big_image = $('.wrapper > .header');

				$(window).on('scroll', materialKitDemo.checkScrollForParallax);
			}

		});
	</script>
</html>
