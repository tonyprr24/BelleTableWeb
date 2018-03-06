<?php
	include_once "header.php";
	session_start();
	if ($_SESSION['Type'] == '2')
	{
		exit(header('Location:artistes.php'));
	}
?>
<style>
	pre.prettyprint{
			background-color: #eee;
			border: 0px;
			margin-bottom: 60px;
			margin-top: 30px;
			padding: 20px;
			text-align: left;
	}
	.atv, .str{
			color: #05AE0E;
	}
	.tag, .pln, .kwd{
			color: #3472F7;
	}
	.atn{
			color: #2C93FF;
	}
	.pln{
			color: #333;
	}
	.com{
			color: #999;
	}
	.space-top{
			margin-top: 50px;
	}
	.btn-primary .caret{
			border-top-color: #3472F7;
			color: #3472F7;
	}
	.area-line{
			border: 1px solid #999;
			border-left: 0;
			border-right: 0;
			color: #666;
			display: block;
			margin-top: 20px;
			padding: 8px 0;
			text-align: center;
	}
	.area-line a{
			color: #666;
	}
	.container-fluid{
			padding-right: 15px;
			padding-left: 15px;
	}
	.table-shopping .td-name{
		min-width: 130px;
	}
</style>

<body class="components-page">

<?php
	include_once "navbar.php";
?>

<div class="wrapper">
	<div class="header header-filter" style="background-image: url('assets/img/public.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<h1 class="title text-center">Espace public</h1>
				</div>
			</div>
		</div>
	</div>

    <div class="main main-raised">
        <div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="fixed-section" data-spy="affix" data-offset-top="340">
                    Membres en ligne :
										<?php ?>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-1">
							<h2 class="text-center">Bienvenue, <?php echo $_SESSION['Pseudo']; ?>.</h2>
							<br /><br />
                Insérer barre de recherche
								<br /><br />
								Insérer liste d'oeuvres (tendances en premier)
								<br /><br />
								A droite, afficher classement temporaire des meilleures oeuvres du moment
                <!-- end container -->
            </div>

        </div>
        </div>
    </div>
    </div>
    <?php
			include_once "footer.php";
		?>

</div>

<!-- Modal Core -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h4 class="modal-title" id="myModalLabel">Modal title</h4>
	  </div>
	  <div class="modal-body">
		Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
		<button type="button" class="btn btn-info btn-simple">Save</button>
	  </div>
	</div>
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

    <script>
        var header_height;
        var fixed_section;
        var floating = false;

        $().ready(function(){
            suggestions_distance = $("#suggestions").offset();
            pay_height = $('.fixed-section').outerHeight();

			$(window).on('scroll', materialKit.checkScrollForTransparentNavbar);

			// the body of this function is in assets/material-kit.js
			materialKit.initSliders();
        });
    </script>

</html>
