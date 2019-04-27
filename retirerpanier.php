<?php
include '../core/panierC.php';
//require "_header.php";
session_start();
 	$idclient=$_SESSION['cin'];	
       		//$DB->query('DELETE  FROM panier WHERE idproduit='.$_GET['id'].' AND idclient='.$idclient.'');
       		$panierC=new PanierCore();
       		$panierC->retirerPanier($_GET['id'],$idclient);
       		echo "<script> window.location.href='../Panier.php'</script>";