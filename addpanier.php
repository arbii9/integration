<?php 
require '_header.php';
session_start();
$idclient=$_SESSION['cin'];
if(isset($_GET['reference']))
{
	$product = $DB->query('SELECT * FROM produit WHERE reference=:id',array('id' => $_GET['reference']));
		if(empty($product))
		{
		die("ce produit n'existe pas");
		}
		else 
		{
    	$productp = $DB->query('SELECT * FROM panier WHERE idproduit=:id and idclient='.$idclient,array('id' => $_GET['reference']));
    	if(empty($productp))
    	{
		$DB->query('INSERT INTO panier  values (null,'.$_GET['reference'].',"'.$product[0]->nom.'","'.$product[0]->prix.'","1","'.$product[0]->prix.'","'.$idclient.'")');
	 	echo "<script> window.location.href='Panier.php'</script>";
		}
		else
		{
			$DB->query("UPDATE panier set pricetotal='".($productp[0]->price*($productp[0]->quantite+1))."', quantite='".($productp[0]->quantite+1)."' WHERE idproduit='".$_GET['reference']."' and idclient='".$idclient."'");
			echo "<script> window.location.href='Panier.php'</script>";
			//echo $productp[0]->quantite;
		}
	}
}
else
{
	die("vous navez pas selectionner de produit a ajouter au panier");
}
?>
