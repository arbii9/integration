
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
                                    <li><a href="produits.php">Produits</a>
                                        <ul class="dropdown">
                                            <li><a href="produitscuisine.php">- Cuisine</a></li>
                                            <li><a href="produitssam.php">- Salle à manger</a></li>
                                            <!-- <li><a href="./service.html">- Porte</a></li> -->
                                            <li><a href="#">- Salle de bain</a></li>
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
    <center><h1>Notre Catalogue</h1></center>
    <!-- Header Area End -->
    <div class="filtrer">
            <!-- <div class="filtertype"> -->
                <form method="POST" action="produits2.php" name="filterrech" onsubmit="return verif()">
            <div>
            <h4>Filtrer par type:</h4>
            <a href="produitscuisine.php"><input type="checkbox" name="type" value="Cuisine" onchange="cuisine()"> <label>Cuisine</label></a> <br/>
            <a href="produitssam.php"><input type="checkbox" name="type" value="SAM" onchange="sam()"> <label>Salle à manger</label></a><br/>
             <a href="produitssdb.php"><input type="checkbox" name="type" value="SDB" onchange="sdb()" checked="checked"> <label>Salle de bain</label></a><br/>
            </div>
            <!-- <div class="trier"> -->
            <div>
            <h4>Trier par :</h4>
            <input type="checkbox" name="tri" value="nom"><label>Nom</label><br/>
            <input type="checkbox" name="tri" value="prix"><label>Prix</label><br/>
            </div>
            <!-- <div class="prix"> -->
            <div>
            <h4>Prix :</h4>
             <!-- Prix Min <input type="number" name="prixmin" class="price"> Prix Max<input type="number" name="prixmax" class="price"> -->
             De <input type="number" id="prixmin" name="min" width="50px" class="filterprice"> à <input type="number" id="prixmax" name="max" width="50px;" class="filterprice">
            </div>
<h4>Chercher un produit :</h4>
            <input type="text" name="rech" placeholder="Chercher un produit" class="searchprod">
            <!-- <button class="searchfilter">Chercher</button> -->
            <input type="submit" name="submit" class="searchfilter" value="Chercher">
            </form> 
             </div>
    </div>
<!-- 
<?php  
// 

?> -->

<!--Product Start-->


<?php 

$set="";
 //$set=$_POST["rech"];
$_sql="select * from produitensolde where type='2' ";
//$_sql='SELECT reference,nom,prix,description,photo,type,remise from produitensolde'; 
$productssolde = $DB->query($_sql); ?>
<?php foreach ( $productssolde as $productsolde) : ?>

<div class="produitts">
  <img src="img/solde.png"  width="150px" class="ticket">
   <!--  <link rel="stylesheet" type="text/css" href="stylearbi.css"> -->
    <img src="img/<?= $productsolde->photo;?>" height="250px" width="250px" class="pic" >
    

    <h3 class="title"> <?= $productsolde->nom ?>   </h3>
    <h4 class="ref"> Reference : <?= $productsolde->reference ?></h4>

    <h4 class="price"> <div class="remise"><?= $productsolde->prix ?></div> <?= ($productsolde->prix)-(($productsolde->prix)*($productsolde->remise)/100)?> DT</h4>
    <a href="#"><p class="type"><?php if($productsolde->type==0) {
        echo "Cuisine";
    } elseif ($productsolde->type==1) {
        echo "Salle à manger";
    }
    elseif ($productsolde->type==2)
    {
        echo "Salle de bain";
    }
    ?></p></a>
    <div class="descrip"><div class="tip">Description :</div> 
    <p > <?= $productsolde->description ?> </p></div>
    <button class="panier"><img src="chart.png" class="addchart" width="10px" height="10px"></button>

   
</div>
 <br>

<?php endforeach ?>


<!--LE RESTE DES PRODUIT-->
<?php

 
// Nous devons valider notre document avant de nous référer à l'ID
// $sql='SELECT * FROM produitensolde ORDER BY reference ASC  ';
// $sql='SELECT * FROM produit ';
$set="";
$sql="select * from produit where type='2' ";

    // if (isset($_POST['min']) and isset($_POST['max'])) {
    //   $sql='SELECT * FROM produit WHERE prix >= '.$_POST["min"].' AND prix <= '.$_POST["max"].'   ';  

    // }
    // echo "$sql";
    // if (isset($_POST['rech'])) {
    //     $sql=' SELECT * FROM produit WHERE nom='.$_POST["rech"].' ';
    //     echo "$sql";
    // }

    // if (isset($_POST['max'])) {
    //  $sql.'AND (prix <= '.$_POST["max"].' ';
    // }
   //  else
   // {$sql='SELECT * FROM produit ORDER BY reference ASC  ';}

 $products2 = $DB->query($sql);?>

<?php foreach ( $products2 as $product) : ?>

<div class="produitts">
  
    <img src="img/<?= $product->photo;?>" height="250px" width="250px" class="pic" >

    <h3 class="title"> <?= $product->nom ?>   </h3>
    <h4 class="ref"> Reference : <?= $product->reference ?></h4>

    <h4 class="price"><?= $product->prix ?> DT</h4>
    <a href="#"><p class="type"><?php if($product->type==0) {
        echo "Cuisine";
    } elseif ($product->type==1) {
        echo "Salle à manger";
    }
    elseif ($product->type==2)
    {
        echo "Salle de bain";
    }
    ?></p></a>
    <div class="descrip"><div class="tip">Description :</div> 
    <p > <?= $product->description ?> </p></div>
    <button class="panier"><img src="chart.png" class="addchart" width="10px" height="10px"></button>

   
</div>
 <br>

<?php endforeach ?>










<!-- <button>Ajouter au panier</button> -->
    <!-- <div class="ajouterpanier">
        <p class="textpanier">Ajouter au panier</p>
        <img src="chart.png" class="addchart" width="10px" height="10px">

    </div> -->

<!--Product End-->


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
