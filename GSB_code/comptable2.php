<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Comptable</title>
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
                            <li class="active border-left"><a href="selectionfichefrais.php">Selection Fiche</a></li>
                            <li><a href="comptable2.php">Liste Forfait</a></li>
                            <li><a href="comptajout.php">Ajout forfait</a></li>
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
               include "connectAD.php";

                $query = "SELECT * FROM forfait";
                $result = $connexion->query($query);
                ?>
                <table>
                    <tr>
                        <th>id</th>
                        <th>libelle</th>
                        <th>montant</th>
                    </tr>
               <?php

                while($row = $result->fetch_array())
                {
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['libelle']."</td>";
                    echo "<td>".$row['montant']."</td>";
                    echo "<td> <a href='comptdelete.php?id=".$row['id']."'' > <img src='images/delete.png' title='Supprimer une information'/></a> </td>";
                    echo "<td> <a href='comptmodif.php?id=".$row['id']."' > <img src='images/edit.png' title='Modifier une information'/></a> </td>";
                    echo "</tr>";
                    
                }
            ?>
                </table>
                
                
                <?php


                /* free result set */
                $result->close();

                /* close connection */
                $connexion->close();
                ?>
              

              
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