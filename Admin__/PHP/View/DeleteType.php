<?php 
include "../Core/TypeCore.php";

if( isset($_POST['Type']) )
{
	$TypeCore = new TypeCore();
	$TypeCore->Delete($_POST['Type']);
}
header('Location: ReadTypeAdmin.php')

 ?>