<?PHP
include "../entities/commande.php";
include "../core/commandes.php";
//print_r($_POST);
if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['datec']) and isset($_POST['mail']) and isset($_POST['num'])){
$commande1=new commande($_POST['nom'],$_POST['prenom'],$_POST['datec'],$_POST['mail'],$_POST['num']);
$commande1C=new commandes();
$commande1C->ajoutercommandes($commande1);
//header('Location: affichercommandes.php');
}else{
	echo "vérifier les champs";
}




$message='
		<html>
				<head>
				  <meta charset="utf-8" />
				</head>
				<body>
				 <div>Bonjour <b>'.$_POST['nom'].','.$_POST['prenom'].'</b>,</div>
				 Vous avez passé une commande dans notre site design cuisine . 
				 <td align="center">
							<font size="2">
							  Merci pour votre fidélité.
							</font>
				 </td>
				 <div align="center">Ceci est un email automatique, merci de ne pas y répondre</div>
				</body>
				</html>
	   
	   
	   ';
 
if (isset($_POST['ajouter'])){
	$name = $_POST['nom'];
	$email = $_POST['mail'];
    
if (!empty($email) && !empty($name)){


/**
 * This example shows settings to use when sending via Google's Gmail servers.
 * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require './PHPMailer/PHPMailerAutoload.php';

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
$mail->Username = "sabrine.fliss9898@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "sabrine 1998";

//Set who the message is to be sent from
$mail->setFrom('sabrine.fliss9898@gmail.com', 'sabrine fliss');

//Set an alternative reply-to address
$mail->addReplyTo('no-replyto@webscript.info', 'sabrine fliss');

//Set who the message is to be sent to
$mail->addAddress($email, $name);

//Set the subject line
$mail->Subject = "Commande: Design Cuisine";

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML('<!DOCTYPE html><html><body>'.$message.'</body></html>');

//Replace the plain text body with one created manually
$mail->AltBody = "Commande: Design Cuisine";

//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');



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
//send the message, check for errors


//Section 2: IMAP
//IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
//Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
//You can use imap_getmailboxes($imapStream, '/imap/ssl') to get a list of available folders or labels, this can
//be useful if you are trying to get this working on a non-Gmail IMAP server.


}
else{
	echo "please enter all input fields";
}

}
function save_mail($mail) {
    //You can change 'Sent Mail' to any other folder or tag
    $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";

    //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    $imapStream = imap_open($path, $mail->Username, $mail->Password);

    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);

    return $result;
}
    

 echo "<script type='text/javascript'> window.location='../views/commandefin.php';
 alert('votre commande a été bien passé. Merci pour votre fidélité');
 </script>";
//header('Location: commandefin.php');




?>