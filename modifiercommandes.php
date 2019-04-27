<HTML>
<head>
<script type="text/javascript" src="controle.js">
	function CalculScore()
	{
       //num tel

	var num =document.getElementById("num").value;
	var longeur = num.length;
	if(longeur!=8)
	{
	 alert("verifier le numero de votre telephone");	
	}
	}

</script>
</head>
<body>
<?PHP
include "../entities/commande.php";
include "../core/commandes.php";
if (isset($_GET['id'])){
	$commandeM=new commandes();
    $result=$commandeM->recuperercommande($_GET['id']);
	foreach($result as $row){
		$id=$row['id'];
		$nom=$row['nom'];
		$prenom=$row['prenom'];
		$datec=$row['datec'];
		$mail=$row['mail']; 
		$num=$row['num'];
		$somme=$row['somme'];
?>

<form  method="POST">
<table>
<caption>Modifier Employe</caption>
<tr>
<td>Id</td>
<td><input type="number" name="id" value="<?PHP echo $id ?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>Prenom</td>
<td><input type="text" name="prenom" value="<?PHP echo $prenom ?>"></td>
</tr>
<tr>
<td>Date de la commende</td>
<td><input type="date" name="datec" value="<?PHP echo $datec ?>"></td>
</tr>
<tr>
<td>Mail</td>
<td><input type="text" name="mail" value="<?PHP echo $mail ?>"></td>
</tr>
<tr>
<td>Numero Tel </td>
<td><input type="number" id="num" name="num"  value="<?PHP echo $num ?>"></td>
</tr>
<tr>
<td>Somme à payer </td>
<td><input type="number" name="somme" value="<?PHP echo $somme ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"  ></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="num_ini" value="<?PHP echo $num;?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$commande=new commande($_POST['nom'],$_POST['prenom'],$_POST['datec'],$_POST['mail'],$_POST['num'],$_POST['somme']);
	$commandeM->modifiercommandes($commande,$_POST['num_ini']);
	//echo $_POST['id_ini'];
	//header('Location: ajoutcommande.php');
	header('Location: affichercommandes.php');
}
?>
</body>
</HTMl>
