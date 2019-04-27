<?php 
include "../core/commandes.php";
$commandeS=new commandes();
if (isset($_POST["id"])){
	$commandeS->supprimercommandes($_POST["id"]);
	header('Location: affichercommandes.php');
}
?>