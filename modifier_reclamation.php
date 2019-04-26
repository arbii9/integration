<?php session_start();
require 'header.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Design Cuisine - Commandes</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="script.js"></script>
</head>

<body>
    




    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Nos Services</h2><h3> Service aprés vente</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="icon_house_alt"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Services</li>
                                <li class="breadcrumb-item active" aria-current="page">Service aprés vente</li>
                                <li class="breadcrumb-item active" aria-current="page">Réclamation</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->


  <section class="akame-contact-area bg-gray section-padding-80">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <!--<div class="section-heading text-center">
                        <h2>Envoyer un message</h2>
                        <p>Nous vous rappellerons plus tard et répondrons à vos questions.</p>
                    </div>-->
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Form -->
                   <!-- <form method="POST" action="ajoutercommande.php" class="akame-contact-form border-0 p-0">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="message-nom" class="form-control mb-30" id="firstname" placeholder="Votre Nom">
                                <input type="text" name="message-prenom" class="form-control mb-30" id="prenom" placeholder="Votre prénom">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" name="message-email" class="form-control mb-30" id="mail" placeholder="Email">
                                <input type="Tel" name="Numéro" class="form-control mb-30" id="tel"  placeholder="Téléphone">
                            </div>

                             <div class="col-lg-6">
                                <label>Mode de payement :</label> </br></br>
                                <input type="radio" name="rep" id="rep0" />
                                <label for="q0r1">Paiement par chèque</label> </br></br>
                                <input type="radio" name="rep"  id="rep1"/>
                                <label for="q0r1">Paiement par éspèce</label> </br></br>
                                <input type="radio" name="rep"  id="rep2"/>
                                <label for="q0r1">Paiement par virement bancaire</label> </br></br>
                             </div>


                         <div class="col-lg-6">
                                <div class="nativeDatePicker">
                                <label for="bday">Enter la date du passage de la commande :</label></br>
                                <input type="date" id="bday" name="bday" class="form-control mb-30"
                                <span class="validity"></span>
                                </div>
                                <p class="fallbackLabel"></p>
                                <div class="fallbackDatePicker">                                
                                </div>
                                <label>Vous voulez avoir une livraison ?</label> </br>
                                <input type="radio" name="rep1" id="rep3"/>
                                <label for="q0r1">Oui</label> </br>
                                <input type="radio" name="rep1" id="rep4"/>
                                <label for="q0r1">Non</label> </br></br>   

                            </div>
                        
                            
                                   


                            <div class="container">
                             <div class="row">
                              <div class="col-12">
                               <div class="breadcrumb-content"></br></br> </br></br> 
                                <h3> Passer votre livraison</h3>
                                 <nav aria-label="breadcrumb">
                                  <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="icon_house_alt"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Services</li>
                                <li class="breadcrumb-item active" aria-current="page">Commandes</li></br></br></br>
                                  </ol>
                                 </nav>
                              </div>
                              </div>
                              </div>
                            </div>
  
                            
                            

                            <div class="col-lg-6">
                                <select name="etat" class="form-control mb-30" >
                                    <option >Bizerte</option>
                                    <option>Tunis</option>
                                    <option>Beb Arous</option>
                                </select>
                                <input type="email" name="message-email" class="form-control mb-30" id="nom" placeholder="Code postal">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="message-email" class="form-control mb-30" id="ville" placeholder="Ville">
                                <input type="text" name="Numéro" class="form-control mb-30" id="nom"  placeholder="Adresse">
                            </div>

                            
                                <div class="col-lg-6">
                                <div class="nativeDatePicker">
                                <label for="bday">Merci de choissir la date de livraison que vous souaitez :</label></br>
                                <input type="date" id="bday" name="bday" class="form-control mb-30"
                                <span class="validity"></span>
                                </div>
                                <p class="fallbackLabel"></p>
                                <div class="fallbackDatePicker">
                                
                 
                       
                                </div>

                          </div>

                            </div>

                            <div class="col-12"></br></br></br>
                                <label for="commantaire">Merci d'ajouter tous les commantaires liés à votre commande :</label>
                                <textarea name="message" class="form-control mb-30" placeholder="Ecrivez votre commantaire..."></textarea>
                            </div>
        
                            <div class="col-12 text-center">
                                <button type="submit" class="btn akame-btn btn-3 mt-15 active" onclick="g()">Envoyer</button> 
                               
                            </div>
                            
                        </div>
                    </form>-->


     <?PHP
include "entities/sav.php";
include "core/savS.php";

//session_start();


if (isset($_POST['modifier']) || isset($_POST['modifi'])){
  $_SESSION['idd']=$_POST['idd'];

  $commandeM=new savS();
    $result=$commandeM->recuperersav($_SESSION['idd']);
  foreach($result as $row){
    $id_commande=$row['id_commande'];
    $type=$row['type'];
    $description=$row['description'];
    $nbre_etoile=$row['nbre_etoile'];
    //var_dump($_SESSION['idd']) ;
?>


     <form  method="POST"  class="akame-contact-form border-0 p-0" action="">

<!-- HNEEEEEEEEEEEEEEEEEEEEE -->
<input type="text" name="idd" class="form-control mb-30" width="800px" value="<?PHP echo $id_commande ?>" readonly>
<p>Type de service :</p>
<input type="text" name="type" class="form-control mb-30" value="<?php echo $type; ?>" readonly>
<p>Sujet / Satisfaction:</p>
<input type="text" name="description" class="form-control mb-30" value="<?php echo $description; ?>" readonly>
<p>Entrez un nombre d'étoile qui peut designer votre satisfaction globale :</p>
<!--<input type="text" name="nbre" class="form-control mb-30" value="<?php echo $nbre_etoile; ?>" >-->
 <div >
  <select class="form-control mb-30" name="nbre" value="<?php echo $nbre_etoile; ?>">
    <option  value="choose">Select :</option>
    
    
    <option  value="1"><?PHP echo "&#9733;"; echo "&#9734;"; echo "&#9734;"; echo "&#9734;"; echo "&#9734;";?></option>
    <option  value="2"><?PHP echo "&#9733;"; echo "&#9733;"; echo "&#9734;"; echo "&#9734;"; echo "&#9734;";?></option>
    <option  value="3"><?PHP echo "&#9733;"; echo "&#9733;"; echo "&#9733;"; echo "&#9734;"; echo "&#9734;";?></option>
    <option  value="4"><?PHP echo "&#9733;"; echo "&#9733;"; echo "&#9733;"; echo "&#9733;"; echo "&#9734;";?></option>
    <option  value="5"><?PHP echo "&#9733;"; echo "&#9733;"; echo "&#9733;"; echo "&#9733;"; echo "&#9733;";?></option>
    <option  value="6"><?PHP echo "&#9734;"; echo "&#9734;"; echo "&#9734;"; echo "&#9734;"; echo "&#9734;";?></option>
  </select>
</div> 
<input type="submit" name="modifier" value="modifie" class="btn akame-btn btn-3 mt-15 active" style="margin-left: 470px;">
 <input type="hidden" name="nbree" value="<?PHP echo $nbre_etoile;?>"></td> 
<p id="error"> </p>
     </form> 


<?PHP
  }
}


  if ( ($id_commande == $_POST['idd']) && (($type == 'Reclamation') || ($type == 'Avis')) )
  {
    if(!empty($_POST['type']) and !empty($_POST['description']) and !empty($_POST['nbre']) and !empty($_POST['nbre'])  )
    {
        if($_POST['nbre']==6)
{
    $_POST['nbre']=0;
}
        $commande=new sav($_POST['idd'],$_POST['type'],$_POST['description'],$_POST['nbre']);

  $commandeM->modifiersav($commande,$_POST['nbree']);
}
  
  //header('Location: ajoutcommande.php');
 //header('Location: tablecommande.php');
  

}
else {
    echo "Vous n'avez pas le droit de changer que le nombre des étoiles";
  }
//print_r($_POST);
?>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Area End -->


<script language="javascript" type="text/javascript">
 

</script>

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
    <!-- Footer Area End -->

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

    













</body>

</html>