<?php 
include "../Core/EmployeCore.php";

if( isset($_POST['ID']) )
{
	$EmpCore = new EmployeCore();
	$EmpCore->Delete($_POST['ID']);
}
header('Location: ReadEmployeAdmin.php')

 ?>