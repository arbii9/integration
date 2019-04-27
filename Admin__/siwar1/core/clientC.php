<?PHP
include "../config.php";
include '../entities/client.php';
class clientC {
    public $conn;
    function __construct()
	{ 
		$c=new config();
		$this->conn=$c->getConnexion();
	}
	
      function insertClient($client,$conn){

		$req1="INSERT INTO CLIENT (NOM,PRENOM,EMAIL,MDP,CIN,VILLE,ADRESSE,TELEPHONE,CLE)
		VALUES ('".$client->getnom()."','".$client->getprenom()."','".$client->getemail()."','".$client->getmdp()."','".$client->getcin()."','".$client->getville()."','".$client->getadresse()."','".$client->gettelephone()."','".$client->getcle()."')";
		if($conn->query($req1)){

			return true;}
	}



	function afficherclients()
	{
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From client";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);   //pour dire que tu dois executer 
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}




function afficherclient ($client)
    {
		echo "cin: ".$client->getcin()."<br>";
		echo "nom: ".$cliet->getnom()."<br>";
		echo "prenom: ".$client->getprenom()."<br>";
		echo "email: ".$client->getemail()."<br>";
		echo "mdp: ".$client->getmdp()."<br>";
		echo "adresse: ".$client->getadresse()."<br>";
		echo "ville: ".$client->getville()."<br>";
		echo "telephone: ".$client->gettelephone()."<br>";
	
	}
	
	
	function supprimerclient($cin){
		$sql="DELETE FROM client where cin= :cin";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':cin',$cin);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
// 	function modifierclient($client,$cin){
// 		$sql="UPDATE client SET cin=:cin, nom=:nom,prenom=:prenom,mdp=mdp,ville=:ville,email=:email,adresse=:adresse,telephone=:telephone WHERE cin=:cin";
		
// 		$db = config::getConnexion();
// 		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
// try{		
//         $req=$db->prepare($sql);
// 		$cin=$client->getcin();
//         $nom=$client->getnom();
//         $prenom=$client->getprenom();
//         $email=$client->getemail();
//         $telephone=$client->gettelephone();
//          $adresse=$client->getadresse();
//          $ville=$client->getville();
//         $mdp=$client->getmdp();

// 		$datas = array(:cin=>$cin, ':nom'=>$nom,':prenom'=>$prenom,':email'=>$email,:telephone=>$telephone,':adresse'=>$adresse,':ville'=>$ville,':mdp'=>$mdp);
// 		$req->bindValue(':email',$email);
// 		$req->bindValue(':ville',$ville);
// 		$req->bindValue(':nom',$nom);
// 		$req->bindValue(':prenom',$prenom);
// 		$req->bindValue(':mdp',$mdp);
// 		$req->bindValue(':adresse',$adresse);
		
		
//             $s=$req->execute();
			
//            // header('Location: index.php');
//         }
//         catch (Exception $e){
//             echo " Erreur ! ".$e->getMessage();
//    echo " Les datas : " ;
//   print_r($datas);
//         }
		
// 	}
// 	function recupererclient($cin){
// 		$sql="SELECT * from client where cin=$cin";
// 		$db = config::getConnexion();
// 		try{
// 		$liste=$db->query($sql);
// 		return $liste;
// 		}
//         catch (Exception $e){
//             die('Erreur: '.$e->getMessage());
//         }
// 	}
	
	function rechercherListeEmployes($tarif){
		$sql="SELECT * from employe where tarifHoraire=$tarif";
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