<?php

include 'header.php';
include "../core/categorieC.php";
include "../core/clientC.php";

?>

<?php 



// include "../core/clientC.php";?>
<h1 style="margin-left: 690px">Bienvenue <?php echo  $_SESSION['nom'] ?></h1>
<h3 style="color: #bcba58 ; margin-left: 800px ; margin-top: 40px">Afficher les données de votre profile </h3>
<div class="form-style-10" style="margin-left: 20px; margin-top: -50px" >
<h1>Modifier votre profile!<span>les champs ne sont pas tous obligatoire!</span></h1>
<form method="POST" action="" >
    <div class="section"><span>1</span> Address</div>
    <div class="inner-wrap">
     
        <label>Address <input type="text" name="adresse" id="adresse"></input></label>
    </div>

    <div class="section"><span>2</span>Phone</div>
    <div class="inner-wrap">
     
        <label>Phone Number <input type="text" name="telephone" id="telephone" maxlength="8" /></label>
    </div>

    <div class="section" ><span>3</span>Passwords</div>
        <div class="inner-wrap">
        <label>Password <input type="password" name="cmdp" /></label>
        <label>Confirm Password <input type="password" name="cmdp2" /></label>
    </div>

     <div class="section" ><span>4</span>categorie</div>
        <div class="inner-wrap">
       
       <select id="categorie" name="categorie" >

    <option value="client normal">client normal</option>
    <option value="hotel"   >hotel</option>
    <option value="societe">societe</option >
</select>    
    </div>

    <div class="button-section">
  <!--   <input type="text" name="cinn" placeholder="cin"> --> <input type="submit" name="smo" value="modifier" />
     <span class="privacy-policy">
    
     </span>
    </div>
</form>
</div>
<div style="margin-left: 920px ;margin-top: -860px">

<form method="POST" action="">

  <input type="submit" name="affiche" value="afficher"  style=" margin-top: -860px; background-color:transparent; cursor:pointer; width:150px;font-size: 20px;"><br>
</form>

</div>

    <table style="margin-left: 800px; /*margin-top: -800px ;*/ size: 5px  ; width:100px ;  border: 2px solid black;" >
   
<!--                    <tr width="5px" >
<th >nom</th>
   </tr >
   <tr width="5px" >
<td >prenom</td>
</tr>
<tr width="5px" >
<td  >email   </td>
</tr>
<tr width="5px" >
<td >cin</td>
</tr>
<tr width="5px" >
<td >ville</td>
</tr>
<tr width="5px" >
<td >adresse</td>
</tr>
<tr width="5px" >
<td >telephone</td>
</tr> -->

<?php
if(isset($_POST['affiche'])){
  $id=(int)$_SESSION['cin'];
 
$co= new clientC(); 
  $liste=$co->afficherclientcin($id);
foreach($liste as $row){
    ?>

  <tr style="width: 20px">
    <td style="color: #bcba58">nom</td>
<td style="color:  #2A88AD" ><?PHP echo $row['nom']; ?></td></tr>
<tr>
  <td  style="color: #bcba58">prenom</td>
<td style="color:  #2A88AD"><?PHP echo $row['prenom']; ?></td>
</tr>
<tr>  <td  style="color: #bcba58">email</td>
    <td style="color:  #2A88AD"><?PHP echo $row['email']; ?></td></tr>
    <tr>
       <td  style="color: #bcba58">cin</td>
    <td style="color:  #2A88AD"><?PHP echo $row['cin']; ?></td>
    </tr>
    <tr> <td  style="color: #bcba58">ville</td>
  <td style="color:  #2A88AD"><?PHP echo $row['ville']; ?></td></tr>
  <tr>
     <td  style="color: #bcba58" >adresse</td>
  <td style="color:  #2A88AD" ><?PHP echo $row['adresse']; ?></td>
  </tr>
  <tr>
     <td  style="color: #bcba58">telephone</td>
  <td style="color:  #2A88AD"><?PHP echo $row['telephone']; ?></td>
  </tr>
    

  </table>
    <?PHP
    }
    }
    
    ?>
 
       <h3 style="color: #bcba58 ; margin-left: 800px ; margin-top: 20px; ">Supprimer de votre profile </h3> 
       <div style="margin-left: 900px; margin-top: 20px"> 
<form action="" method="POST" >
     
<input type="submit" name="supprimer" value ='supprimer' id="supprimer"  style=" background-color:transparent; cursor:pointer; width:150px;font-size: 20px">

</form>
</div>       





<?php

if (isset($_POST['smo']) ){
   $telephone=$_POST["telephone"];
 $adresse=$_POST["adresse"];
$cmdp=$_POST["cmdp"];
$categorie=$_POST["categorie"];

 // extract($_POST);
  if(!empty($_POST["telephone"])){
    // clientC::modifierclient($_POST["cin"],"tel",$tel);
    $c= new clientC();
    $c->modifierclient((int)$_SESSION['cin'],"telephone",$telephone);
  }
  
  if(isset($_POST["adresse"])){
  if(!empty($_POST["adresse"])){
    $cp= new clientC();
    $cp->modifierclient((int)$_SESSION['cin'],"adresse",$adresse);
    // clientC::modifierclient($_POST["cin"],"adresse",$adresse);
      // $cc= new clientC();
      //   $cc->modifierclient($_POST["cin"],"adresse",$adresse);
  }
  }
  if(isset($_POST["cmdp"])){
  if(!empty($_POST["cmdp"])){

    $cp->modifierclient((int)$_SESSION['cin'],"cmdp",$cmdp);
    // clientC::modifierclient($_POST["cin"],"adresse",$adresse);
      // $cc= new clientC();
      //   $cc->modifierclient($_POST["cin"],"adresse",$adresse);
  }
  }
   



  
    $categor= new categorieC();
   $categor->modifiercategorie((int)$_SESSION['cin'],$categorie,$categorie);
    // clientC::modifierclient($_POST["cin"],"adresse",$adresse);
      // $cc= new clientC();
      //   $cc->modifierclient($_POST["cin"],"adresse",$adresse);
  
  


}




$cccc= new clientC(); 
$lo=new categorieC();
if(isset($_POST['supprimer']))
{
  $cccc->supprimerclient($_SESSION['cin']);
  $lo->supprimercategorie($_SESSION['cin']);
  echo "<script> window.location.href='deconnexion.php'</script>";
}
?>


   <script src="../js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="../js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="../js/akame.bundle.js"></script>
    <!-- Active -->
    <script src="../js/default-assets/active.js"></script>
</body>
</html>
