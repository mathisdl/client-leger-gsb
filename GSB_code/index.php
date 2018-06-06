<?php
// Start the session
@session_start();
include 'connectAD.php';
?>




<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>GSB</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.css">
        <link rel="stylesheet" href="css/custom-styles.css">
        <link rel="stylesheet" href="css/component.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/font-awesome-ie7.css">

        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>

        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->
            <div class="wrap-bg">
                <div class="site-header">
                    <div class="logo">
                        <h1>GSB</h1>
                    </div>
                </div>
                <div class="container">
                <div class="banner">
                    <div class="carousel slide" id="myCarousel">
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                        <div class="item">
                                            <img src="img/banner-image.jpg" alt="">
                                            <div class="carousel-caption">
                                              <h1>Galaxy-Swiss Bourdin</h1>
                                              <img src="img/logo.gif" class="spacing-r" alt="">
                                              <div class="social-icons">
                                                <ul>
                                                    <li><a href="#"><i class="fw-icon-facebook icon"></i></a></li>
                                                    <li><a href="#"><i class="fw-icon-twitter icon"></i></a></li>
                                                    <li><a href="#"><i class="fw-icon-google-plus icon"></i></a></li>
                                                </ul>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="item active">
                                            <img src="img/banner-image.jpg" alt="">
                                            <div class="carousel-caption">
                                              <h1>Galaxy-Swiss Bourdin</h1>
                                                <img src="img/logo.gif" class="spacing-r" alt="">
                                              <div class="social-icons">
                                                <ul>
                                                    <li><a href="#"><i class="fw-icon-facebook icon"></i></a></li>
                                                    <li><a href="#"><i class="fw-icon-twitter icon"></i></a></li>
                                                    <li><a href="#"><i class="fw-icon-google-plus icon"></i></a></li>
                                                </ul>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="img/banner-image.jpg" alt="">
                                            <div class="carousel-caption">
                                              <h1>Galaxy-Swiss Bourdin</h1>
                                                <img src="img/logo.gif" class="spacing-r" alt="">
                                              <div class="social-icons">
                                                <ul>
                                                    <li><a href="#"><i class="fw-icon-facebook icon"></i></a></li>
                                                    <li><a href="#"><i class="fw-icon-twitter icon"></i></a></li>
                                                    <li><a href="#"><i class="fw-icon-google-plus icon"></i></a></li>
                                                </ul>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Carousel nav -->
                                    <a data-slide="prev" href="#myCarousel" class="carousel-control left"><i class="fw-icon-chevron-left"></i></a>
                                    <a data-slide="next" href="#myCarousel" class="carousel-control right"><i class="fw-icon-chevron-right"></i></a>
                                </div>
                </div>
                </div>
            </div>
            <div class="menu">
                <div class="navbar">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="fw-icon-th-list"></i>
                    </a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="active border-left"><a href="#">Accueil</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
                <div class="mini-menu">
            <label>
          <select class="selectnav">
            <option value="#" selected="">Accueil</option>
            <option value="#">A propos</option>
            <option value="#">Simulation de frais</option>
            <option value="#">Contact</option>
          </select>
          </label>
          </div>
            </div>
            <div class="container bg-light-gray">
              <div class="main-content">
                <div class="featured-heading">
                    <h2>Si vous êtes un visiteur médical entrez vos identifiants.</h2>
                </div>
                <div class="connexion">
                    <form action="" method="GET">
                        <fieldset>
                            <legend>Connectez vous : </legend>
                            <label>Identifiant : </label>
                            <input name="login" id="login" type="text" size="10" required />
                            <br />
                            <label>Mot de passe : </label>
                            <input name="pwd" id="pwd" type="password" size="10" required />
                            <br />
                            <input name="connexion" id="connexion" value="Connexion" type="submit" />

                        </fieldset>
                    </form>
                </div>
        <div class="site-footer">
            <div class="container">
            <div class="row-fluid">
                <div class="span8 offset2">
            <div class="copy-rights">
                Copyright (c) GSB. All rights reserved.
            </div>
            </div>
            </div>
            </div>
        </div>
        </div>
        </div>

        <!-- /container -->

       <script src="js/jquery-1.9.1.js"></script>
<script src="js/bootstrap.js"></script>



<?php


if (@array_key_exists("login", $_GET)) {

	$sql = "SELECT login, pwd FROM visiteur WHERE login = '".$_GET['login']."' and pwd = '".$_GET['pwd']."'";
	$results = ligneSQL($sql);

}




if (@array_key_exists("login", $results)) {


    if ($_GET['login']=="comptable"||$_GET['login']=="Comptable"||$_GET['login']=="COMPTABLE") {
    	echo "<meta http-equiv='refresh' content='0;url=selectionfichefrais.php'>";
    }
    elseif ($_GET['login']=="admin"||$_GET['login']=="Admin"||$_GET['login']=="ADMIN") {
    	echo "<meta http-equiv='refresh' content='0;url=admin1.php'>";
    }

    else
    echo "<meta http-equiv='refresh' content='0;url=visiteur.php?login=".$_GET['login']."&pwd=".$_GET['pwd']."'>";

    // else
    // echo "<meta http-equiv='refresh' content='0;url=erreur.php'>";
}

    $connexion->close();

?>

</body>
</html>
