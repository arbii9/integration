



<?php 
require "header.php";
?>

<div class="form-style-5" style="margin-left: 20px">
<form method="POST" >
<fieldset>
<legend><span class="number"></span> Mot De Passe Oublié</legend>
<input type="text" name="cin" id="email" maxlength="8" placeholder="Votre cin"><br>
<input type="hidden" name="string"  data-value-function="string">

</fieldset>

<input type="submit" name="login" value="Envoyer" >


</form>
<div id="wrong" style="visibility: hidden;" ><p style="color: red;">cet cin n'existe pas</p></div>

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
   $cin = htmlspecialchars($_POST['cin']);
   
   if(!empty($cin) ) 
   
{
      $requser = $bdd->prepare("SELECT * FROM client WHERE cin =$cin ");
      $requser->execute();
      $userexist = $requser->rowCount();
      if($userexist == 1) 
      
      {    
         


$chaine1=new chaineC();
  $liste=$chaine1->afficherstring();
foreach ($liste as $data)
{
$chiffre= $data['chaine'];
}
    





         $userinfo = $requser->fetch();

         $_SESSION['mpo'] = $userinfo['cin'];
      
 echo "<script type='text/javascript'>;
 window.location='getchaine.php';
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







<?php
date_default_timezone_set('Etc/UTC');

require '../PHPMailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "siwar.hassen@esprit.tn";

//Password to use for SMTP authentication
$mail->Password = "ahlemsaidane";

//Set who the message is to be sent from
$mail->setFrom('siwar.hassen@esprit.tn', 'Design cuisine');

//Set an alternative reply-to address
$mail->addReplyTo('replyto@example.com', 'siwar hassen');

//Set who the message is to be sent to
$mail->addAddress('sisihassenn@gmail.com', 'siwar');

//Set the subject line
$mail->Subject = 'Mot de passe oublié';

$message='
    <html>
        <head>
          <meta charset="utf-8" />
        </head>
        <body>
         <div>voici le cin: <b>'.$chiffre.'</b>,</div>
        
         <td align="center">
              <font size="2">
                consulter la pager pour voir les details.
              </font>
              <a href="localhost/designcuisine/AdminLTE-master/pages/tables/clientt.php">link</a>
         </td>
        
                </body>
        </html>';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML('<!DOCTYPE html><html><body>'.$message.'</body></html>');

//Replace the plain text body with one created manually
$mail->AltBody = 'higy';

//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}


?>

<?php
include "Nexmo/src/NexmoMessage.php" ;


  

/**
   * To send a text message.
   *
   */

  // Step 1: Declare new NexmoMessage.
  $nexmo_sms = new NexmoMessage('569dc0de','fuxdIcUAIqegv2rL');

  // Step 2: Use sendText( $to, $from, $message ) method to send a message. 
  $info = $nexmo_sms->sendText( '21653236799', 'Votre Code De Confirmation :', $chiffre );

  // Step 3: Display an overview of the message
  



?>