<?php
// Start the session
@session_start();
include "connectAD.php";

if (!empty($_GET['login'])){
  $_SESSION["login"] = $_GET['login'];
  $_SESSION["pwd"] = $_GET['pwd'];
  $login = $_SESSION["login"];
  $pwd = $_SESSION["pwd"];
  } else {
  $login = $_SESSION["login"];
  $pwd = $_SESSION["pwd"];
}

$sqlid = "SELECT id FROM visiteur WHERE login = '".$login."' and pwd = '".$pwd."'";
$_SESSION["id"] = champSQL($sqlid);


?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Visiteur</title>
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
                            <li class="active border-left"><a href="#">Liste fiche</a></li>
                            <li class="active border-left"><a href="renseignerfiche.php?login=<?php $login = $_GET['login']; echo $login ?>&pwd=<?php $pwd = $_GET['pwd']; echo $pwd ?>
                                ">Renseigner fiche frais</a></li>
                            <li class="active border-left"><a href="index.php">Deconnexion</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
                <div class="mini-menu">

          </div>
            </div>
            <div class="container bg-light-gray">
              <div class="main-content">
                <div class="featured-heading">

				</div>
            <div class="contenu1">

            <?php



                $login = $_SESSION['login'];
                $login = "'$login'";

                $query = "SELECT * FROM visiteur, fichefrais WHERE visiteur.id = fichefrais.idVisiteur AND visiteur.id = ".$_SESSION['id']." ;";
                $result = $connexion->query($query);

                ?>
                <form id="formulaire" action="enregistrer.php" method="get">
                <table>
                    <tr>
                        <th>Mois</th>
                        <th>Annee</th>
                        <th>Montant Valide</th>
                        <th>Nombres Justificatifs</th>
                        <th>Etat</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                        <th>Voir</th>
                    </tr>

                <?php

                while($row = $result->fetch_array())
                {
                	$idfichefrais = $row['id'];
                    echo "<tr>";
                    echo "<td>".$row['mois']."</td>";
                    echo "<td>".$row['annee']."</td>";
                    echo "<td>".$row['montantValide']."</td>";
                    echo "<td>".$row['nbJustificatifs']."</td>";
                    echo "<td>".$row['idEtat']."</td>";
                    echo "<td> <a href=visiteurmodifie.php?id=$idfichefrais> <img src='images/edit.png' title='Modifier une information'/></a>";
                    echo "</td>";
                    echo "<td> <a href=\"supprimerfiche.php?id=$idfichefrais\" onclick=\"return(confirm('Voulez-vous supprimer ?'))\"><img src='images/delete.png' title='Supprimer une information'/></a></a>";
                    echo "</td>";
                    echo "<td> <a href=AfficheFicheFrais.php?id=$idfichefrais>Voir</a>";
                    echo "</td>";
                    echo "</tr>";

                }

            	?>


                </table>
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

        <!-- /container -->

       <script src="js/jquery-1.9.1.js"></script>
<script src="js/bootstrap.js"></script>
    </body>
</html>
