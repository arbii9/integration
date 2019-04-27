<?php
include "../config.php";

class TypeCore
{
	function Create($Type)
	{
		$sql = "INSERT INTO TYPEEMPLOYE (TYPE,SALARY) VALUES (:type,:salary)";
		$db=config::getConnexion();
		try{
	        $req=$db->prepare($sql);
			
			$req->bindValue(':type',$Type->getType());
			$req->bindValue(':salary',$Type->getSalary());
		
            $req->execute();   
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}

	function Read()
	{
		$sql = "SELECT * FROM TYPEEMPLOYE";
		$db = config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function Delete($type)
	{
		$sql="DELETE FROM TYPEEMPLOYE WHERE TYPE = :type";
		$db = config::getConnexion();
		try{
			$req=$db->prepare($sql);
			$req->bindValue(':type',$type);
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function Update($Type)
	{
		$sql="UPDATE TYPEEMPLOYE SET  SALARY=:salary WHERE TYPE=:type";
		
		$db = config::getConnexion();
		try{		
	        $req=$db->prepare($sql);

			$req->bindValue(':type',$Type->getType());
			$req->bindValue(':salary',$Type->getSalary());
			
		
            $s=$req->execute();			
        	}
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        	}
	}

	function GetType($type)
	{
		$sql="SELECT * FROM TYPEEMPLOYE WHERE TYPE='$type'";
		$db = config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
	    catch (Exception $e){
	    	echo $sql;
	    }
	}
}

?>