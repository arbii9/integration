<?php 
include "../Core/TypeCore.php";
include "../Entities/Type.php";

if( isset($_POST['Type']) and isset($_POST['Salary']) )
{
	$Type = new Type($_POST['Type'],$_POST['Salary']);
	$TypeCore = new TypeCore();
	$TypeCore->Create($Type);

	header("Location: ReadTypeAdmin.php");
}

 ?>