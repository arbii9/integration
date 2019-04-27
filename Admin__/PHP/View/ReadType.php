<?PHP
include "../Core/TypeCore.php";

$Type = new TypeCore();
$liste = $Type->Read();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <title>Table: TypeEmploye</title>
  <link rel="stylesheet" type="text/css" href="../style_.css">
</head>
<body>
	<h1>TypeEmploye <span>Table</span></h1>
	<table class="responstable">
		<tr>
		<th><span>Type</span></th>
		<th>Salary</th>
		<th>Delete</th>
		<th>Update</th>
		</tr>

	<?PHP
	foreach($liste as $row){
		?>
		<tr>
		<td><?PHP echo $row['TYPE']; ?></td>
		<td><?PHP echo $row['SALARY']; ?></td>
		<td><form method="POST" action="DeleteType.php">
		<input type="submit" name="Delete" value="Delete">
		<input type="hidden" value="<?PHP echo $row['TYPE']; ?>" name="Type">
		</form>
		</td>
		<td><a href="UpdateType.php?Type=<?PHP echo $row['TYPE']; ?>">	
		<input type="button" name="Update" value="Update"></a></td>
		</tr>
<?PHP
}
?>
</table>
<a href="formType_.html" style="color: #167F92;">ajouter type</a>
</body>
</html>
