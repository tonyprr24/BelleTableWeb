<?php
 	session_start();
?>
<!-- Navbar -->
<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll navbar-warning">
	<div class="container">
        <div class="navbar-header">
	    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
	        	<span class="sr-only">Toggle navigation</span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	    	</button>
	    	<a href="index.php">
	        	<div class="logo-container">
	                <div class="logo">
	                    <img src="assets/img/logo.png" alt="Belle Table" rel="tooltip" title="<b>Belle Table Concours</b> | Revenir à l'accueil" data-placement="bottom" data-html="true">
	                </div>
	                <div class="brand">
	                    BELLE TABLE
	                </div>


				</div>
	      	</a>
	    </div>

	    <div class="collapse navbar-collapse" id="navigation-index">
				<ul class="nav navbar-nav navbar-left">

					<?php
						if (isset($_SESSION['IDUser']))
						{
							echo '<i class="material-icons">person</i>Bonjour, '.$_SESSION['Prenom'].' '.$_SESSION['Nom'].'.';
						}
					?>

				</ul>
	    	<ul class="nav navbar-nav navbar-right">
					<?php
						if (isset($_SESSION['IDUser']))
						{
							if ($_SESSION['Type'] == "1")
							{
								echo
								'<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<i class="material-icons">public</i> Espace public <b class="caret"></b>
									</a>
									<ul class="dropdown-menu dropdown-menu-right">
											<li class="dropdown-header">Espace public</li>
											<li><a href="public.php">Accueil</a></li>
											<li class="divider"></li>
											<li><a href="#">Les oeuvres</a></li>
											<li><a href="#">Les artistes</a></li>
											<li><a href="#">Classement</a></li>
											<li class="divider"></li>
											<li><a href="#">Liste des membres</a></li>
									</ul>
								</li>';
							}
							else if ($_SESSION['Type'] == "2")
							{
								echo
								'<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<i class="material-icons">star_border</i> Espace artistes <b class="caret"></b>
									</a>
									<ul class="dropdown-menu dropdown-menu-right">
											<li class="dropdown-header">Espace artistes</li>
											<li><a href="artistes">Accueil</a></li>
											<li class="divider"></li>
											<li><a href="#">Ma page perso</a></li>
											<li><a href="#">Parrainage</a></li>
											<li class="divider"></li>
											<li><a href="#">Liste des membres</a></li>
									</ul>
								</li>';
							}
						}

						if (!isset($_SESSION['IDUser']))
						{
							echo
							'<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">face</i> Espace membre <b class="caret"></b>
								</a>
								<ul class="dropdown-menu dropdown-menu-right">
										<li class="dropdown-header">Espace membre</li>
										<li><a href="login.php">Se connecter</a></li>
										<li><a href="register.php">S\'inscrire</a></li>
								</ul>
							</li>';
						}
						else
						{
							echo
							'<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">face</i> Espace membre <b class="caret"></b>
								</a>
								<ul class="dropdown-menu dropdown-menu-right">
										<li class="dropdown-header">Espace membre</li>
										<li><a href="settings.php">Paramètres</a></li>
										<li><a href="deconnexion.php">Déconnexion</a></li>
								</ul>
							</li>';
						}
					?>

				<li>
					<a href="forum">
						<i class="material-icons">forum</i> Forum
					</a>
				</li>
				<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">search</i>
								</a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li class="dropdown-header" style="width: 450px; height: 50px;">
									<style>
												#form1{
												  margin-left:200px;
												}
												.side-nav li a {
												  text-decoration:none;
												}
												#searchResults2{
												  background-color:#666666;
												}
												#searchResults{
												  background-color:#666666;
												}
												.right li a{
												  padding-right:2em;
												  text-decoration:none
												}
									</style>
											
											<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">

										  
											<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
											<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
									
											<div class="input-field" style="max-width: 400pt;">
												  <input id="search" type="search" required onkeyup="getBlogs(this.value,0);">
												  <label class="label-icon" for="search"><i class="material-icons">search</i></label>
												  <i class="material-icons">close</i>
												  <div id="searchResults" ></div>
											</div>
											
											<script>
												 $(document ).ready(function(){
													 $(".button-collapse").sideNav();
												  })
												function getBlogs(str,flag){
														  if(str==""){
															if(flag == 0) //laptop size
															{
															document.getElementById("searchResults").innerHTML="";
														  }
														  else{ //for mobile and laptop
															 document.getElementById("searchResults2").innerHTML="";
														  }
															  return;
														  }
												   var searchedResults,x,txt="";
														  var xhttp=new XMLHttpRequest();
														   xhttp.onreadystatechange = function() {
													if (this.readyState == 4 && this.status == 200) {
														searchedResults=JSON.parse(this.responseText);
														for(x in searchedResults)
														{
												//           get data from server and set it to txt
														  txt="data"
														}
													if(flag == 0) //laptop size
															{
															document.getElementById("searchResults").innerHTML=txt;
														  }
														  else{ //for mobile and laptop
															 document.getElementById("searchResults2").innerHTML=txt;
														  }
													}
												}
												}
											</script>
									</li>
								</ul>
				</li>
				<li>
					<a rel="tooltip" title="Suivez-nous sur Twitter" data-placement="bottom" href="https://twitter.com/BelleTable" target="_blank" class="btn btn-white btn-simple btn-just-icon">
						<i class="fa fa-twitter"></i>
					</a>
				</li>
				<li>
					<a rel="tooltip" title="Suivez-nous sur Facebook" data-placement="bottom" href="https://www.facebook.com/BelleTable" target="_blank" class="btn btn-white btn-simple btn-just-icon">
						<i class="fa fa-facebook-square"></i>
					</a>
				</li>
				<li>
					<a rel="tooltip" title="Suivez-nous sur Instagram" data-placement="bottom" href="https://www.instagram.com/BelleTable" target="_blank" class="btn btn-white btn-simple btn-just-icon">
						<i class="fa fa-instagram"></i>
					</a>
				</li>

	    	</ul>
	    </div>
	</div>
</nav>
<!-- End Navbar -->