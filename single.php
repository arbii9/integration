
<?php 
require 'db.class.php';
//require 'filter.php';
$DB = new DB();
?><!DOCTYPE html>
<html>
<head>
     <meta charset="UTF-8">
     <meta charset="utf-8"/>
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Design Cuisine - Catalogue</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylearbi.css"> 
    <!-- Javascript -->
    <script type="text/javascript" src="produits.js"></script>
</head>
<body>


<!-- <div id="preloader">
        <div class="loader"></div>
    </div> -->
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Top Header Area Start -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-5">
                        <div class="top-header-content">
                            <p>Bienvenue chez design cuisine <span class="mx-1"></span> !</p>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="top-header-content text-right">
                            <p><i class="fa fa-clock-o" aria-hidden="true"></i> Lun-Sam:<span class="mx-2"></span> 8.00 à 17.00 <span class="mx-2"></span> | <span class="mx-2"></span> <i class="fa fa-phone" aria-hidden="true"></i> Contactez_nous:<span class="mx-2"></span> (+216)  25 889 988</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Header Area End -->

<!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="akameNav">

                        <!-- Logo -->
                       <a class="nav-brand" href="index.html"><img class="logo" src="./img/core-img/_logo1.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                             <div class="classynav">
                                <ul id="nav">
                                    <li> </span> <a href="./index.html"></a><input type="image" src="./img/core-img/home.png"class="home"/></li>
                                    <!--<li class="active"><a href="./index.html">Home</a></li>-->
                                    <li><a href="#">Produits</a>
                                        <ul class="dropdown">
                                            <li><a href="produitscuisine.php">- Cuisine</a></li>
                                            <li><a href="produitssam.php">- Salle à manger</a></li>
                                            <!-- <li><a href="./service.html">- Porte</a></li> -->
                                            <li><a href="produitssdb.php">- Salle de bain</a></li>
                                            <!-- <li><a href="#">- Dropdown</a>
                                                <ul class="dropdown">
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                </ul>
                                            </li> -->
                                        </ul>
                                    </li>
                                    <li><a href="./portfolio.html">Portefeuille</a></li>
                                    <li><a href="#">Services</a>
                                    <ul class="dropdown">
                                            <li><a href="./commande.html">- commande</a></li>
                                            <li><a href="#">- Livraison</a>
                                                <ul class="dropdown">
                                                    <li><a href="livraison.html">- livraison</a></li>
                                                    <li><a href="reclamation.html">- réclamation</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="./about.html">présentation</a></li>
                                    <li><a href="./blog.html">Blog</a></li>
                                    <li><a href="./contact.html">Contactez_nous</a></li>
                                </ul>
                                <!--search icon -->
                                    <!--<div id="searchIcon"> 
                                    <i class="icon_search" aria-hidden="true"> </i>
                                     </div>  -->
                                <ul>
                                    <li><input type="image" src="./img/core-img/cartee.png"class="carte"/></li>
                                    <li><input type="image" src="./img/core-img/user.png" class="user"/></li>
                                    <li><input type="image" src="./img/core-img/search.png"class="search"/></li>
                                    <li><input type="image" src="./img/core-img/3bras.png"class="bars"/></li>
                                 
                                </ul>
                                <!-- Cart Icon -->
                                <!--<div class="cart-icon ml-5 mt-4 mt-lg-0">
                                    <a href="#"><i class="icon_cart"></i></a>
                                </div>-->
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <?php 
    $sql="SELECT * FROM produit WHERE reference='".$_GET['reference']."'";
    $prod= $DB->query($sql);
    foreach ($prod as $row) {}


    ?>

<div class="produitts">
  
    <img src="img/<?= $row->photo;?>" height="250px" width="250px" class="pic" >

    <h3 class="title"> <?= $row->nom ?>   </h3>
    <h4 class="ref"> Reference : <?= $row->reference ?></h4>

    <h4 class="price"><?= $row->prix ?> DT</h4>
    <a href="#"><p class="type"><?php if($row->type==0) {
        echo "Cuisine";
    } elseif ($row->type==1) {
        echo "Salle à manger";
    }
    elseif ($row->type==2)
    {
        echo "Salle de bain";
    }
    ?></p></a>
    <div class="descrip"><div class="tip">Description :</div> 
    <p > <?= $row->description ?> </p></div>
    <button class="panier"><img src="chart.png" class="addchart" width="10px" height="10px"></button>

   
</div>


















<!-- Footer Area Start -->
    <footer class="footer-area section-padding-80-0">
        <div class="container">
            <div class="row justify-content-between">

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single-footer-widget mb-80">
                        <!-- Footer Logo -->
                        <a href="#" class="footer-logo"><img src="img/core-img/_logo1.png" alt=""></a>

                      <!--  <p class="mb-30">Design cuisine confirme son positionnement de leader sur le marché tunisien dans la fabrication de meubles sur mesure en tout genre..</p>-->

                        
                       
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget mb-80">
                        <!-- Widget Title -->
                        <h4 class="widget-title">Ouverture</h4>

                        <!-- Open Times -->
                        <div class="open-time">
                            <p>Lundi-Samedi: 8.00 à 17.00</p>
                            <p>Dimanche: 10.00 à 13.00</p>
                        </div>

                        <!-- Social Info -->
                        <div class="social-info">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>

                        </div>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-md-4 col-xl-3">
                    <div class="single-footer-widget mb-80">

                        <!-- Widget Title -->
                        <h4 class="widget-title">Contactez-nous</h4>

                        <!-- Contact Address -->
                        <div class="contact-address">
                            <p>Tel: (+216)  25 889 988</p>
                            <p>E-mail: commercial@designcuisine.net</p>
                            <p>Adresse: Boulevard 14 Janvier à coté galerie saidani Bizerte</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>
   <!-- All JS Files -->
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="js/akame.bundle.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>
