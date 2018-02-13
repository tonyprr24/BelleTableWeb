<?php

include_once "bdd.php";

session_start(); // Je montre à mon script que je suis connecté pour ensuite...

session_destroy(); // Pouvoir détruire parfaitement ma session.

header("Location:index.php"); // Je reviens à l'accueil


?>