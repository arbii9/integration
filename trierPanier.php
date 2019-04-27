<?php
include '../core/panierc.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Panier</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
    <!-- Preloader -->
    
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
            <div class="classy-nav-container breakpoint-off light left">
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
                                     <a href="index.html"><input type="image" src="./img/core-img/home.png" class="home"></a>
                                    <!--<li class="active"><a href="./index.html">Home</a></li>-->
                                    <li class="cn-dropdown-item has-down"><a href="../products.php">Produits</a>
                                        <ul class="dropdown">
                                            <li><a href="#">- Cuisine</a></li>
                                            <li><a href="#">- Dressing</a></li>
                                            <li><a href="#">- Porte</a></li>
                                            <li><a href="#">- Salle de bain</a></li>
                                            <li class="has-down"><a href="#">- Dropdown</a>
                                                <ul class="dropdown">
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                </ul>
                                            <span class="dd-trigger"></span></li>
                                        </ul>
                                    <span class="dd-trigger"></span></li>
                                    <li><a href="./portfolio.html">Portefeuille</a></li>
                                    <li class="cn-dropdown-item has-down"><a href="#">Services</a>
                                    <ul class="dropdown">
                                            <li><a href="./commande.html">- commande</a></li>
                                            <li class="has-down"><a href="#">- Livraison</a>
                                                <ul class="dropdown">
                                                    <li><a href="livraison.html">- livraison</a></li>
                                                    <li><a href="reclamation.html">- réclamation</a></li>
                                                </ul>
                                            <span class="dd-trigger"></span></li>
                                        </ul>
                                    <span class="dd-trigger"></span></li>
                                    <li><a href="./about.html">présentation</a></li>
                                    <li><a href="./blog.html">Blog</a></li>
                                    <li><a href="./contact.html">Contactez_nous</a></li>
                                    <a href="../Panier.php"></a><li><a href="../Panier.php"><input type="image" src="./img/core-img/cartee.png" class="carte"></a></li>
                                    <li><input type="image" src="./img/core-img/search.png" class="search"></li>
                                    <li class="cn-dropdown-item"><input type="image" src="./img/core-img/3bras.png" class="bars">
                                            <ul class="dropdown">
                                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i><span class="mx-2"></span> Facebook</a></li>
                                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i><span class="mx-2"></span> Twitter</a></li>
                                                <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i><span class="mx-2"></span> Google</a></li>
                                                <li><a href="#" class="instagram"><i class="fa fa-instagram"></i><span class="mx-2"></span> Instagram</a></li>
                                            </ul>          
                                    </li>
                                    <li class="cn-dropdown-item"><input type="image" src="./img/core-img/user.png" class="user">
                                               <ul class="dropdown">
                                                    <li><a href="#">- S'inscrire</a></li>
                                                    <li><a href="#">- Connecter</a></li>
                                                </ul>
                                    </li>
                                   
                                </ul>
                                <!--search icon -->
                                    <!--<div id="searchIcon"> 
                                    <i class="icon_search" aria-hidden="true"> </i>
                                     </div>  -->
                                 <ul>
                                    
                                
                                 </ul>
                                <!-- Cart Icon -->
                                <!--<div class="cart-icon ml-5 mt-4 mt-lg-0">
                                    <a href="#"><i class="icon_cart"></i></a>
                                </div>-->
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                           <!-- Search Form -->
                       <!-- <div class="search-form">
                           <form action="#" method="get">
                                 <input type="search" name="search" id="search" placeholder="Type keywords &amp; press enter...">
                                     <button type="submit" class="d-none"></button>
                           </form>-->
                           <!-- Close Icon -->
                             <!--<div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i>
                             </div>
                        </div>-->

                </div>
            </div>
        </div>
    </header>
    


<div class="form"></div>
<form action="searchPanier.php" method="post">
    <input type="text" name="search">
    <button>search</button>
</form>
<button><a href="trierPanier.php">Trier</button></a>
</div>
<!-- annimation des images-->
<table>
  <tr>
    <th>Image</th>
    <th>Nom Produit</th>
    <th>Quantite</th>
    <th>Prix Unitaire</th>
    <th>Prix Total</th>
    <th>Action</th>
  </tr>
  <?php
  //require '_header.php';
      $panier1c=new PanierCore();
      $products=$panier1c->trierPanier($_SESSION['cin']);
      if(empty($products))
    {
        ?>
        <h1 class="paniervide">Panier vide</h1>
        <?php
    } 
    else
    {
      foreach ($products as $product){
    
    echo '<tr><form action="views/update_panier.php" method="get">
    <input type="hidden" name="id" value="'.$product['id'].'"/>

    <td><img class="imgprod" src="'.$product['img'].'" class="panierpic"></td>
    <td><h2>'.$product['name'].'</h2></td>
    <td><input type="number" size="30" min="1" max="99" name="quantite" value="'.$product['quantite'].'" id="qte" class="haha"></td>
    <td><span  id="prix" name="prix">'.$product['price'].'</span><span id="tnd" class="tnd">TND</span></td>
    <td id="total"><span>'.$product['quantite'] * $product['price'].'</span><span id="tnd" class="tnd">TND</span></td>
    <td><button><a href="views/retirerpanier.php?id='.$product['id'].'">retirer</button></a><input type="submit" value="update"/></td></tr></form>'; 
}
    }
     ?>
</table>

    <!-- Welcome Area Start -->
    
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel owl-loaded owl-drag">
            <!-- Single Welcome Slide -->
            

            <!-- Single Welcome Slide -->
            
        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-2052px, 0px, 0px); transition: all 0s ease 0s; width: 6156px;"><div class="owl-item cloned" style="width: 1026px;"></div><div class="owl-item cloned" style="width: 1026px;"></div><div class="owl-item active" style="width: 1026px;"></div><div class="owl-item cloned" style="width: 1026px;"></div><div class="owl-item cloned" style="width: 1026px;"></div></div></div><div class="owl-nav disabled"><div class="owl-prev">prev</div><div class="owl-next">next</div></div><div class="owl-dots"><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div></div></div>
    </section>



<!-- les produits kela fehom 4 tsawer-->


<!-- Border -->
    <div class="container">
        <div class="border-top mt-3"></div>
    </div>

    <!-- les produits kela fehom 4 tsawer-->
    



<!-- Pourquoi Nous Choisir? -->


<!-- Why Choose Us Area Start -->
    
    <!-- Why Choose Us Area End -->



<!-- Portfolio Area Start -->
    
    <!-- Portfolio Area End -->



<!-- mte3 service client -->

        <span class="footerimg">
    <!-- Call To Action Area Start -->
    <section class="akame-cta-area bg-gray section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-10 col-xl-5">
                    <div class="cta-content">
                        <h2>Service client au   <br>25 889 988</h2>
                        <p>Pour toutes questions ou aide à la configuration, notre équipe d'experts se fera un plaisir de vous répondre. Nous sommes à votre disposition par email, ou directement par téléphone de 8h à 17h.</p>
                        <div class="akame-btn-group mt-30">
                          
                            <a href="./about.html" class="btn akame-btn">Contactez-nous</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Thumbnail -->
        <div class="cta-thumbnail bg-img" style="background-image: url(img/bg-img/cta.png);"></div>
    </section>
    <!-- Call To Action Area End -->

</span>




<!-- la derniere partie de la page: contactez_nous -->


   
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
                            <p>lundi-samedi: 8.00 à 17.00</p>
                            <p>dimanche: 10.00 à 13.00</p>
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
    <script src="js/default-assets/active.js"></script><a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647; display: none;"><i class="arrow_carrot-up" <="" i=""></i></a>



</body>
</html>