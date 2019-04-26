<?php
require "_header.php";
session_start();
 	$idclient=$_SESSION['cin'];	
       		$DB->query('DELETE  FROM panier WHERE idproduit='.$_GET['id'].' AND idclient='.$idclient.'');
       		echo "<script> window.location.href='Panier.php'</script>";