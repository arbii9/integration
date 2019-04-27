<?php 
include "../core/commandes.php";
$commande1C=new commandes();
$listecommandes=$commande1C->affichercommandes();
?>
<table border="1">
<tr>
<td>Id</td>
<td>Nom</td>
<td>Prenom</td>
<td>Date de la commande</td>
<td>Mail</td>
<td>Numero</td>
<td>Somme à payer</td>
</tr>

<?PHP
foreach($listecommandes as $row){
	?>
	<tr>
	<td><?PHP echo $row['id']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['prenom']; ?></td>
	<td><?PHP echo $row['datec']; ?></td>
	<td><?PHP echo $row['mail']; ?></td>
	<td><?PHP echo $row['num']; ?></td>
	<td><?PHP echo $row['somme']; ?></td>
	<td><form method="POST" action="supprimercommandes.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	</td> 
	<td><a href="modifiercommandes.php?id=<?PHP echo $row['id']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>