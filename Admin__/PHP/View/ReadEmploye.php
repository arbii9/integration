<?PHP
include "../Core/EmployeCore.php";

if (isset($_POST['Search']) && isset($_POST['SearchTag'])) 
{
	$sql = "SELECT * FROM EMPLOYE WHERE ".$_POST['SearchTag']." LIKE '%".$_POST['SearchInput']."%'";
}
else
{
	$sql = "SELECT * FROM EMPLOYE";
}
$EmpCore = new EmployeCore();
$liste = $EmpCore->Read($sql);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <title>Table: Employe</title>
  <link rel="stylesheet" type="text/css" href="../style_.css">
</head>
<body>
	<h1>Employe <span>Table</span></h1>
	<form method="POST">
			<input type="text" name="SearchInput" style="box-sizing: border-box;
	    -webkit-box-sizing: border-box;
	    -moz-box-sizing: border-box;
	    border: 1px solid #BEBEBE;
	    padding: 7px;
	    margin: 0px;
	    -webkit-transition: all 0.30s ease-in-out;
	    -moz-transition: all 0.30s ease-in-out;
	    -ms-transition: all 0.30s ease-in-out;
	    -o-transition: all 0.30s ease-in-out;
	    outline: none;">
	    <input type="submit" name="Search" value="Search" style="background: #4B99AD; padding: 8px 15px 8px 15px;border: none;color: #fff;">
	    <input type="radio" name="SearchTag" value="NOM" checked><span style="font-family: Verdana; font-weight: normal; color: #024457;">Nom</span>
	    <input type="radio" name="SearchTag" value="PRENOM" <?PHP if(isset($_POST['SearchTag'])){if($_POST['SearchTag']=='PRENOM'){echo "checked";}} ?>><span style="font-family: Verdana; font-weight: normal; color: #024457;">Prenom</span>
	    <input type="radio" name="SearchTag" value="E_MAIL"<?PHP if(isset($_POST['SearchTag'])){if($_POST['SearchTag']=='E_MAIL'){echo "checked";}} ?>><span style="font-family: Verdana; font-weight: normal; color: #024457;">Email</span>
	    <input type="radio" name="SearchTag" value="TYPE"<?PHP if(isset($_POST['SearchTag'])){if($_POST['SearchTag']=='TYPE'){echo "checked";}} ?>><span style="font-family: Verdana; font-weight: normal; color: #024457;">Type</span>
	    <input type="radio" name="SearchTag" value="N_PHONE"<?PHP if(isset($_POST['SearchTag'])){if($_POST['SearchTag']=='N_PHONE'){echo "checked";}} ?>><span style="font-family: Verdana; font-weight: normal; color: #024457;">N°Telephone</span>
	</form>
	<table class="responstable">
		<tr>
		<th><span>ID</span></th>
		<th>Nom</th>
		<th>Prenom</th>
		<th>Sexe</th>
		<th>Date de naissance</th>
		<th>Email</th>
		<th>N°telephone</th>
		<th>Type</th>
		<th>Date d'embauche</th>
		<th>Delete</th>
		<th>Update</th>
		</tr>

	<?PHP
	foreach($liste as $row){
		?>
		<tr>
		<td><?PHP echo $row['ID']; ?></td>
		<td><?PHP echo $row['NOM']; ?></td>
		<td><?PHP echo $row['PRENOM']; ?></td>
		<td><?PHP echo $row['SEXE']; ?></td>
		<td><?PHP echo $row['DATE_N']; ?></td>
		<td><?PHP echo $row['E_MAIL']; ?></td>
		<td><?PHP echo $row['N_PHONE']; ?></td>
		<td><?PHP echo $row['TYPE']; ?></td>
		<td><?PHP echo $row['DATE_H']; ?></td>
		<td><form method="POST" action="DeleteEmploye.php">
		<input type="submit" name="Delete" value="Delete">
		<input type="hidden" value="<?PHP echo $row['ID']; ?>" name="ID">
		</form>
		</td>
		<td><a href="UpdateEmploye.php?ID=<?PHP echo $row['ID']; ?>">	
		<input type="button" name="Update" value="Update"></a></td>
		</tr>
<?PHP
}
?>
</table>
<a href="PdfEmploye.php" target="_blank" style="color: #4B99AD;">cliquez ici pour obtenir tout en pdf</a> <span style="color: #4B99AD; ">__________________________________________________________________________________________________________________________ </span><a href="../../formEmp_.html" style="color: #4B99AD;">ajouter employe</a>
</body>
</html>



