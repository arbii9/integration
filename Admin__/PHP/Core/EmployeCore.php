<?php 
include "../config.php";

class EmployeCore
{
	function Create($Employe)
	{
		$sql = "INSERT INTO EMPLOYE (ID,NOM,PRENOM,SEXE,E_MAIL,TYPE,N_PHONE,DATE_N,DATE_H) VALUES (:id,:nom,:prenom,:sexe,:email,:type,:phone,:date_n,:date_h)";
		$db=config::getConnexion();
		try{
	        $req=$db->prepare($sql);
			
			$req->bindValue(':id',$Employe->getID());
			$req->bindValue(':nom',$Employe->getNom());
			$req->bindValue(':prenom',$Employe->getPrenom());
			$req->bindValue(':sexe',$Employe->getSexe());
			$req->bindValue(':email',$Employe->getEmail());
			$req->bindValue(':type',$Employe->getType());
			$req->bindValue(':phone',$Employe->getPhone());
			$req->bindValue(':date_n',$Employe->getDate_n());
			$req->bindValue(':date_h',$Employe->getDate_h());
		
            $req->execute();   
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}

	function Read($sql)
	{
		$db = config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function Delete($id)
	{
		$sql="DELETE FROM EMPLOYE WHERE ID= :id";
		$db = config::getConnexion();
		try{
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function Update($Emp)
	{
		$sql="UPDATE EMPLOYE SET ID=:id, NOM=:nom, PRENOM=:prenom, SEXE=:sexe, E_MAIL=:email, TYPE=:type, N_PHONE=:phone, DATE_H=:date_h, DATE_N=:date_n WHERE ID=:id_";
		
		$db = config::getConnexion();
		try{		
	        $req=$db->prepare($sql);

			$req->bindValue(':id',$Emp->getID());
			$req->bindValue(':id_',$Emp->getID());
			$req->bindValue(':nom',$Emp->getNom());
			$req->bindValue(':prenom',$Emp->getPrenom());
			$req->bindValue(':sexe',$Emp->getSexe());
			$req->bindValue(':email',$Emp->getEmail());
			$req->bindValue(':type',$Emp->getType());
			$req->bindValue(':phone',$Emp->getPhone());
			$req->bindValue(':date_h',$Emp->getDate_h());
			$req->bindValue(':date_n',$Emp->getDate_n());
		
            $s=$req->execute();			
        	}
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        	}
    	}	

		function GetEmp($id)
		{
			$sql="SELECT * FROM EMPLOYE WHERE ID=$id";
			$db = config::getConnexion();
			try{
				$liste=$db->query($sql);
				return $liste;
			}
	        catch (Exception $e){
	            die('Erreur: '.$e->getMessage());
	        }
		}

	}

 ?>