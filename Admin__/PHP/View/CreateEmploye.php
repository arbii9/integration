<?php 
include "../Core/EmployeCore.php";
include "../Entities/Employe.php";

if( isset($_POST['Nom']) and isset($_POST['Prenom']) and isset($_POST['Date_n']) and isset($_POST['Email']) and isset($_POST['Sexe']) and isset($_POST['N_telephone']) and isset($_POST['Type']) and isset($_POST['Date_h']) )
{
	$Emp = new Employe($_POST['Nom'],$_POST['Prenom'],$_POST['Sexe'],$_POST['Email'],$_POST['Type'],$_POST['N_telephone'],$_POST['Date_n'],$_POST['Date_h']);
	$EmpCore = new EmployeCore();
	$EmpCore->Create($Emp);
	echo "done :)";
	header("Location: ReadEmployeAdmin.php");
}
else
{
	echo "ghalt :p";
}

 ?>