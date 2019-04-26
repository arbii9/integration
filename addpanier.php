<?php 
require '_header.php';
session_start();
$idclient=$_SESSION['cin'];
if(isset($_GET['id']))
{
	$product = $DB->query('SELECT * FROM products WHERE id=:id',array('id' => $_GET['id']));
		if(empty($product))
		{
		die("ce produit n'existe pas");
		}
		else 
		{
    	$productp = $DB->query('SELECT * FROM panier WHERE idproduit=:id and idclient='.$idclient,array('id' => $_GET['id']));
    	if(empty($productp))
    	{
		$DB->query('INSERT INTO panier  values (null,'.$_GET['id'].',"'.$product[0]->name.'","'.$product[0]->price.'","1","'.$product[0]->price.'","'.$idclient.'")');
	 	echo "<script> window.location.href='Panier.php'</script>";
		}
		else
		{
			$DB->query("UPDATE panier set pricetotal='".($productp[0]->price*($productp[0]->quantite+1))."', quantite='".($productp[0]->quantite+1)."' WHERE idproduit='".$_GET['id']."' and idclient='".$idclient."'");
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
