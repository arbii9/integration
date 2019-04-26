<?php include "../config.php";

/*$db = config::getConnexion();
      		$cin =$db->lastInsertId();
		echo $cin;*/

class commandes { 
function affichercommandes(){
		$sql="SElECT * From commandes";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
}}

	
	function ajoutercommandes($commande){
		//$cin=1;
		$sql="insert into commandes (nom,prenom,datec,mail,num,somme,id_client) values (:nom,:prenom,:datec,:mail,:num,:somme,:id_client)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        //$cin=$commande->getCin();
        $nom=$commande->getNom();
        $prenom=$commande->getPrenom();
        $datec=$commande->getDatec();
        $email=$commande->getEmail();
		$numero=$commande->getNumero();
        $id_client = $this->getIdClient($nom,$prenom,$email);
        $somme = $this->getSomme($id_client);
        
       // echo $this->getIdClient($nom,$prenom,$email);

		//$somme=$commande->getSomme();
		//$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':datec',$datec);
		$req->bindValue(':mail',$email);
		$req->bindValue(':num',$numero);
		$req->bindValue(':somme',$somme);
		$req->bindValue(':id_client',$id_client);
		
            $req->execute();
            
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	} 

          function getIdClient($nom,$prenom,$mail)
          {
          	$db = config::getConnexion();
            $cmd = "SELECT id_client FROM `clients` WHERE (nom = '$nom') and (prenom = '$prenom') and (mail = '$mail')";
            $qCMD = $db->query($cmd);
            foreach ($qCMD as $row)
            return $row['id_client'];
          }

          
          function getSomme($id_client)
          {
          	$db = config::getConnexion();
            $cmd = "SELECT somme FROM `paniers` WHERE id_client = '$id_client'";
            $qCMD = $db->query($cmd);
            foreach ($qCMD as $value)
            return $value['somme'];
          }



		function supprimercommandes($id){
		$sql="DELETE FROM commandes where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
     
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	} 
	function modifiercommandes($commande,$num){
		$sql="UPDATE commandes SET nom=:nom,prenom=:prenom,datec=:datec,mail=:mail,num=:numm WHERE (mail=:mail) and (nom=:nom) and (prenom=:prenom)";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
     try{		
        $req=$db->prepare($sql);
        $numm=$commande->getNumero();
        $nom=$commande->getNom();
        $prenom=$commande->getPrenom();
        $datec=$commande->getDatec();
        $email=$commande->getEmail();
		//$numero=$commande->getNumero(); 
		//$somme=$commande->getSomme(); 
		$datas = array(':nom'=>$nom,':nom'=>$nom,':prenom'=>$prenom,':datec'=>$datec,':mail'=>$email,':numm'=>$numm,':num'=>$num,':somme'=>$somme); 
		$req->bindValue(':nom',$nom);
		//echo $nom;
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':datec',$datec);
		$req->bindValue(':mail',$email);
		$req->bindValue(':numm',$numm);
		$req->bindValue(':num',$num);
		$req->bindValue(':somme',$somme);
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recuperercommande($id){
		$sql="SELECT * from commandes where id=$id";
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


            
/*try {
    $conn = new PDO('mysql:host=localhost;dbname=sabrine', 'root', '');
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO commandes (nom,prenom,datec,mail,num,somme) values ('fliss','sabrine','2019-03-21',
    'sabrine.fliss@esprit.tn','12345678','14')";
    // use exec() because no results are returned
    $conn->exec($sql);
    $last_id = $conn->lastInsertId();
    echo "New record created successfully. Last inserted ID is: " . $last_id;
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;*/

?> 