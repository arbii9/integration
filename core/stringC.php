<?PHP
require_once "../config.php";
require_once'../entities/string.php';
class chaineC {
    public $conn;
    function __construct()
	{ 
		$c=new config();
		$this->conn=$c->getConnexion();
	}
	

	function insertstring($chaine){
		$sql="insert into motdepasse (chaine) values (:string)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
         $string=$chaine->getstring();
		$req->bindValue(':string',$string);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}



	function afficherstring()
	{
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT chaine From motdepasse";
		$db = config::getConnexion();
	
		$liste=$db->query($sql);   //pour dire que tu dois executer 
		return $liste;
		
       
	}




function afficherstringe ($chaine)
    {
		echo "string: ".$chaine->getstring()."<br>";
	
	}
	
	
		function supprimermot(){
		$sql="DELETE FROM motdepasse ";
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
	


}

?>