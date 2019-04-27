


























<?php 
require "header.php";
?>

<div class="form-style-5" style="margin-left: 20px">
<form action="" method="POST">
<fieldset>
<legend><span class="number"></span> Se connecter</legend>

<input type="text" name="cin" id="email" maxlength="8" placeholder="Votre cin"><br>
<input type="password" name="password" placeholder="password">
</fieldset>
<div class="akame-btn-group mt-30">
  <input type="submit" name="login" value="login" >
           </form>
           <form method="POST" action="../views/ajouterstring.php">
<fieldset>
<input type="hidden" name="string"  data-value-function="string">
<script type="text/javascript">

window.string = function() {
    var result           = '';
   var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
   var charactersLength = characters.length;
   for ( var i = 0; i < 10; i++ ) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
   }
   return result;
}



var elements = document.querySelectorAll('*[data-value-function]');
for (var i = 0; i < elements.length; i++) {
    var valueFunctionName = elements[i].getAttribute('data-value-function');
    elements[i].value = window[valueFunctionName]();
}
</script>
</fieldset>



<input type="submit"  value="Mot De Passe Oublié ?"></input><br><br>

</form>               
                            
                        </div>

<div id="wrong" style="visibility: hidden;" ><p1 style="color: red;">verifier les champs</p1></div>

</div>




<?php
require "footer.php";
?>
<?php


$bdd = new PDO('mysql:host=127.0.0.1;dbname=designcuisine', 'root', '');

if(isset($_POST['login'])) { 
   $cin = htmlspecialchars($_POST['cin']);
   $password = ($_POST['password']);
   if(!empty($cin) AND !empty($password)) 
   
{
      $requser = $bdd->prepare("SELECT * FROM client WHERE cin =$cin and mdp ='$password' ");
      $requser->execute();
      $userexist = $requser->rowCount();
      if($userexist == 1) 
      
      {
         $userinfo = $requser->fetch();

         $_SESSION['cin'] = $userinfo['cin'];
         $_SESSION['nom'] = $userinfo['nom'];
    echo "<script type='text/javascript'>alert('Bienvenue ');
window.location='index.php';
</script>";
          }
         else { 
                    
               session_destroy();
echo "<script type='text/javascript'>document.getElementById('wrong').style.visibility = 'visible';

</script>";
             
                           }
      

     
     
    
      
}
   
}

?>






