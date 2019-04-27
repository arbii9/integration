
<meta charset="utf8">

<!-- <?php 
if(!isset($_SESSION)) 
    { 
        session_start(); 
        // $errors=array();

    } 
 ?> -->

<?php

include '../core/clientC.php';
include 'mailConfirm.php';
// include 'confirmation.php';

$ccc= new clientC(); 
$cc= new clientC(); 
$errors=array();

$mdp=password_hash($_POST['mdp'],PASSWORD_BCRYPT);
$cin=$_POST['cin'];
$email=$_POST['email'];

$cinText=NULL;
$reqq="select cin from client where cin like '$cin' ";
$list=$ccc->conn->query($reqq);
$varo=$list->fetchAll();

$emailText=NULL;
$reqqq="select email from client where email like '$email' ";
$liste=$ccc->conn->query($reqqq);
$var=$liste->fetchAll();
// var_dump($emailText);	
foreach ($var as $v ) {

$emailText=$v[0];	

}
foreach ($varo as $vo ) {

$cinText=$vo[0];	

}
// var_dump($emailText);	
//
if($cin==$cinText){
	// echo "votre email";
	// echo"hhh";
	 // header('Location: ../compte.html?type=error&message=Cet e-mail est déjà enregistré '); 
// echo "<p>cet cin existe deja;

// </p>";
// header('Location:../compte.php'); 
	 // $errors['cin']="cet cin existe";
	 // header('Location: ../compte.php?type=error&message=Cet e-mail est déjà enregistré '); 
  // var_dump($errors);
  // header('Location:../compte.php'); 

 echo "<script type='text/javascript'>alert('cet cin existe deja');
 window.location='../compte.php';
</script>";
	 $errors['cin']="cet cin existe";
	 // header("Location: ../web/compte.php");

    exit;
}
else{
if($email==$emailText){
	// echo "votre email";
	 // header('Location: ../compte.html?type=error&message=Cet e-mail est déjà enregistré '); 
echo "<script type='text/javascript'>alert('cet email existe deja');
window.location='..web/compte.php';
</script>";

}

else{

//$_SESSION['cle']=$cle;
$_SESSION['email']=$email;
//var_dump($_POST['civ']);
//var_dump($cle);	

	
$longeurcle= 10 ;
$cle=0;

for ($i=1; $i <$longeurcle ; $i++)
 { 
	

	$cle.= mt_rand(0,9);
}
$cle=$cle;


$c1=new client($_POST['nom'],$_POST['prenom'],$email,$cin,$mdp,$_POST['adresse'],$_POST['ville'],$_POST['telephone'],$cle);	

// $message='../views/confirmation.php?email='.urlencode($email).'&cle='.$cle ;

// var_dump($c1);

  

//var_dump($ccc->insertClient($c1,$cc->conn));
if ($ccc->insertClient($c1,$cc->conn))
	
{
var_dump($cle);

if(isset($_POST['confirmer']))
{
			$to = $_POST['email'];
	if(!filter_var($to, FILTER_VALIDATE_EMAIL)){
		?>
		<br>
		<div class="alert alert-danger">
    		<strong>Warning !</strong> Enter the correct email.
  		</div>
  		<?php
	}
	else{
		$from = "sisihassenn@gmail.com";
	if(!filter_var($from, FILTER_VALIDATE_EMAIL)){
		?>
		<br>
		<div class="alert alert-danger">
    		<strong>Warning !</strong> Enter the correct email.
  		</div>
  		<?php
	}
	else {
		$header="MIME-Version : 1.0\r\n";
		$header.='From:"PrimFX.com"<support@primfx.com>'."\n";
		$header.='Content-Type:text/html;charset="uft-8"'."\n";
		$header.='Content-Transfer-Encoding:8bit';
		$message='<html><body><p>fretf</p></body></html>';
		mail('sisihassenn@gmail.com' , 'hi', $message, $header);
// var_dump(mail('sisihassenn@gmail.com' ,'hi', $message, $header));
		session_start(); 
		$_SESSION['auth']=$client;

header('location:confirmation.php');

		// $message = 'http://localhost/frontLn/web/confirmation.php?email='.urlencode($email).'&cle='.$cle ;
		// $message = wordwrap($message, 70);
		// $headers = "From:" . $from;
		// $subject = "form submission";
		// mail($to , $subject, $message, $headers);
		// var_dump(mail('sisihassenn@gmail.com' , $subject, $message, $headers));

		?>
		<br>
		<div class="alert alert-success">
    		<strong>Success ! </strong> Mail send successfully.
  		</div>
  		<?php
		}
	}

	
	
	}
}


}

//mail( "Confirmation de compte",$email, $message);
//var_dump($cle);
//var_dump($cle);
//var_dump($mail);


// header('Location: ../views/confirmation.php');
  

}

	# code...


//header('location:interfaceAjout.html');








// <!-- 
// <?php
//  // include "../core/clientC.php";
//  include "../config.php";
//$conn=mysql_connect("localhost","root","") or die(mysql_error());

//mysql_select_db("designcuisine",$conn) or die(mysql_error());

// $conn = mysqli_connect("localhost","root","","designcuisine");
// if (mysqli_connect_errno())
//  {
// printf("Échec de la connexion : %s\n", mysqli_connect_error());
// exit();
// }

// $dbh=mysqli_connect("localhost","root","","designcuisine");
 









