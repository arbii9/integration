<?php

include 'header.php';

include "../core/clientC.php";
include "../core/stringC.php";
?>


<div class="form-style-10" style="margin-left: 20px; margin-top: 10px" >
<h1>Modifier votre profile!<span>les champs  sont  obligatoires!</span></h1>
<form method="POST" action="">
    <div class="section" ><span>1</span>Passwords</div>
        <div class="inner-wrap">
        <label>Password <input type="password" name="cmdp" minlength="3" /></label>
       <!--  <label>Confirm Password <input type="password" name="cmdp2" /></label> -->
        <input type="submit" name="fff" value="modifier">
    </div>

</form>
</div>














<?php


if (isset($_POST['fff']) ){
  $chaine =$_SESSION['mpoo'];
      
$chaine1C=new chaineC();
$chaine1C->supprimermot();
$cmdp=$_POST["cmdp"];
  $cinn =(int)$_SESSION['mpo'];

 // extract($_POST);
 
  if(isset($_POST["cmdp"])){
  if(!empty($_POST["cmdp"])){

 //$cp=new clientC($_POST['cmdp']);
$clii=new clientC();
   
	$clii->mod($_POST["cmdp"],(int)$_SESSION['mpo']);
unset($_SESSION['mpo']);
unset($_SESSION['mpoo']);
 echo "<script type='text/javascript'>;
window.location='login.php';
</script>";
    // clientC::modifierclient($_POST["cin"],"adresse",$adresse);
      // $cc= new clientC();
      //   $cc->modifierclient($_POST["cin"],"adresse",$adresse);
  }
  }
 

  
  
  


}





?>


<?php require '../web/footer.php'; ?>
