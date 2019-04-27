<?php 
if(isset($_POST['choix']))
{

header('Location: avis.php');
}
else if (isset($_POST['choix1']))
{
header('Location: reclamation.php');
}
else{
header('Location: SAV.php');

}



?>