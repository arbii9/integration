



<?php 
require "header.php";
?>

<div class="form-style-5" style="margin-left: 20px">
<form method="POST" >
<fieldset>
<legend><span class="number"></span> Mot De Passe Oublié</legend>
<input type="text" name="string" placeholder="Code D'accés"><br>

</fieldset>

<input type="submit" name="login" value="Envoyer" >


</form>
<div id="wrong" style="visibility: hidden;" ><p style="color: red;">Code D'accés Incorrect</p></div>

</div>

<?PHP
include "../entities/string.php";
include "../core/stringC.php";

function verifier($tableau){
  foreach ($tableau as $key => $value) {
    if(!isset($_POST[$value])){
      return false;
    }
  }
  return true;
}

?>


<?php
require "footer.php";
?>
<?php


$bdd = new PDO('mysql:host=127.0.0.1;dbname=designcuisine', 'root', '');

if(isset($_POST['login'])) { 
   $string = htmlspecialchars($_POST['string']);
   
   if(!empty($string) ) 
   
{
      $requser = $bdd->prepare("SELECT chaine FROM motdepasse where chaine='$string'");
      $requser->execute();


      $userexist = $requser->rowCount();

      if($userexist == 1) 
      
      {    
         $userinfo = $requser->fetch();

$m=$userinfo;

echo $m;
         //$_SESSION['mpoo'] = $userinfo;







       

  echo "<script type='text/javascript'>;
 window.location='modifiermotdepasse.php';
 </script>";
  
  
 



          }
         else { 
                 echo "<script type='text/javascript'>document.getElementById('wrong').style.visibility = 'visible';

</script>";
               session_destroy();
                    
                           }
      

     
     
    
      
}
   
}

?>




