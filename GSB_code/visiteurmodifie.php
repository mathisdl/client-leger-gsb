<?php @session_start();

include "connectAD.php";

$idVisiteur = $_SESSION['id'];
// On recupere l'id de la fiche de frais dans l'URL
$idfichefrais = $_GET['id'];

$sqlfiche = "SELECT * FROM fichefrais WHERE id='$idfichefrais';";
$result = tableSQL($sqlfiche);

foreach ($result as $ligne) {
		//on extrait chaque valeur de la ligne courante
		$mois  = $ligne[2];
		$annee = $ligne[3];

}

$sqlquantiterepas = "SELECT quantite FROM lignefraisforfait WHERE idFicheFrais='$idfichefrais' AND idForfait='REP' ;";
$sqlquantitenuitee = "SELECT quantite FROM lignefraisforfait WHERE idFicheFrais='$idfichefrais' AND idForfait='NUI' ;";
$sqlquantiteetape = "SELECT quantite FROM lignefraisforfait WHERE idFicheFrais='$idfichefrais' AND idForfait='ETP' ;";
$sqlquantitekm = "SELECT quantite FROM lignefraisforfait WHERE idFicheFrais='$idfichefrais' AND idForfait='KM' ;";

$quantiterepas = champSQL($sqlquantiterepas);
$quantitenuitee = champSQL($sqlquantitenuitee);
$quantiteetape = champSQL($sqlquantiteetape);
$quantitekm = champSQL($sqlquantitekm);

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Visiteurmodifie</title>
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
                            <li class="active border-left"><a href="visiteur.php">Liste fiche</a></li>
                            <li class="active border-left"><a href="renseignerfiche.php">Renseigner fiche frais</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
                <div class="mini-menu">
									</div>

																		</div>
									<div class="contenu1">
									<form action="ModifFicheFrais.php" method="get">

									   <br /><br /><br /><br /><br />

										<fieldset>



											<label>Mois : </label>
											<input name="mois" id="mois" value="<?php echo $mois; ?>" type="text" size="auto" readonly="readonly" />

											<br /><br />


											<label>Ann&eacute;e : </label>
											<input name="annee" id="annee" value="<?php echo $annee; ?>" type="text" size="auto" readonly="readonly" />
											
											<br /><br />


											<label>IdFicheFrais : </label>
											<input name="idfiche" id="idfiche" value="<?php echo $idfichefrais; ?>" type="text" size="auto" readonly="readonly" />


										</fieldset>

										<br/><br/>

										<fieldset>


											<label>Repas midi : </label>
											<input name="repas" id="repas" value="<?php echo $quantiterepas; ?>" type="number" min="0" size="auto"/>

											<br /><br />


											<label>Nuit&eacute;es : </label>
											<input name="nuitee" id="nuitee" value="<?php echo $quantitenuitee; ?>" type="number" min="0" size="auto"/>

											<br /><br />


											<label>&Eacute;tape : </label>
											<input name="etape" id="etape" value="<?php echo $quantiteetape; ?>" type="number" min="0" size="auto"/>

											<br /><br />

											<label>Km : </label>
											<input name="km" id="km" value="<?php echo $quantitekm; ?>" type="number" min="0" size="auto"/>

											<br /><br /><br />

											<input id="button" class="button" type="submit" value="Modifier"/>


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

        <!-- /container -->

       <script src="js/jquery-1.9.1.js"></script>
<script src="js/bootstrap.js"></script>
    </body>
</html>
