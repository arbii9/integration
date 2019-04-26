<?php include "../config.php";

/*$db = config::getConnexion();
      		$cin =$db->lastInsertId();
		echo $cin;*/

class savS { 
function affichersav(){
		$sql="SElECT * From sav";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
}}

	
	function ajoutersav($sav){
	$sql="insert into sav (id_commande,type,description,nbre_etoile) values (:id_commande,:type,:description,:nbre_etoile)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $id_commande=$sav->getID();
        $type=$sav->getType();
        $description=$sav->getDescription();
        $nbre_etoile=$sav->getNbre_etoile();
		$req->bindValue(':id_commande',$id_commande);
		$req->bindValue(':type',$type);
		$req->bindValue(':description',$description);
		$req->bindValue(':nbre_etoile',$nbre_etoile);
		
            $req->execute();
            
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	} 
    

    function supprimersav($id_commande){
		$sql="DELETE FROM sav where id_commande= :id_commande";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_commande',$id_commande);
		try{
            $req->execute();
     
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}  
  
    function modifiersav($sav,$nbre_etoile){
        $sql="UPDATE sav SET id_commande=:id_commande,type=:type,description=:description,nbre_etoile=:nbre_etoilee WHERE id_commande=:id_commande";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
     try{		
     	
        $req=$db->prepare($sql);
        $nbre_etoilee=$sav->getNbre_etoile();
        $type=$sav->getType();
        $description=$sav->getDescription();
        $id_commande=$sav->getID();
		$datas = array(':id_commande'=>$id_commande,':type'=>$type,':description'=>$description,':nbre_etoilee'=>$nbre_etoilee,':nbre_etoile'=>$nbre_etoile); 
		$req->bindValue(':id_commande',$id_commande);
		$req->bindValue(':type',$type);
		$req->bindValue(':description',$description);
		$req->bindValue(':nbre_etoilee',$nbre_etoilee);
		$req->bindValue(':nbre_etoile',$nbre_etoile);
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
           // echo " Erreur ! ".$e->getMessage();
   //echo " Les datas : " ;
 // print_r($datas);

        }
		
	}
	function recuperersav($id_commande){
		$sql="SELECT * from sav where id_commande=$id_commande";
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