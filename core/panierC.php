<?php 
include '../config.php';

class PanierCore
{


	function GetProduit($ref)
	{
		$sql="SELECT * FROM produit WHERE reference=$ref";

		$db = config::getConnexion();
        try{
        $compte=$db->query($sql);
        return $compte;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
    function GetPanier($ref)
    {
        $sql="SELECT * FROM panier WHERE idproduit=$ref";

        $db = config::getConnexion();
        try{
        $compte=$db->query($sql);
        return $compte;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
	function VerifPanier($idprod,$idclient)
	{
		$sql="SELECT * FROM panier WHERE (idproduit=$idprod and idclient=$idclient) ";
        $db = config::getConnexion();
		try{
        $panier=$db->query($sql);
        $x=0;
        foreach ($panier as $row) {
            $x++;
        }
        if ($x==0) {
        	return $x;
        }
        else {
        	return $x;
        }
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	}
	function AjouterPanier($panier,$ref)
	{
		$produitC=new PanierCore();

		$produit=$produitC->getProduit($ref);
		foreach ($produit as $row) {}
			$verif=$produitC->VerifPanier($panier->getIdProduit(),$panier->getIdClient());
		if ($verif==0)
		{
			$sql="INSERT INTO panier (id,idproduit,name,pricetotal,quantite,price,idclient) values (null,:ref,:name,:pricetotal,'1',:price,:idclient)";
            $db = config::getConnexion();
			try{

        $req=$db->prepare($sql);
	
        $req->bindValue(':ref',$ref);
        $req->bindValue(':name',$panier->getName());
        $req->bindValue(':pricetotal',$panier->getPrice());
        $req->bindValue(':price',$panier->getPrice());
        $req->bindValue(':idclient',$panier->getIdClient());
        $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		}
		else
		{
			$sql="UPDATE panier set pricetotal=:pricetotal,quantite=:quantite where (idproduit=:ref and idclient=:idclient)";
            $panierC=new PanierCore();
            $prod=$panierC->GetPanier($ref);
            foreach ($prod as $row) {
                $panier->setQuantite($row['quantite']);
            }
			$pricetotal=$panier->getPrice()*($panier->getQuantite()+1);
			$quant=$panier->getQuantite()+1;
            $db = config::getConnexion();
				try{
        $req=$db->prepare($sql);
	
        
    	$req->bindValue(':pricetotal',$pricetotal);
		$req->bindValue(':quantite',$quant);
        $req->bindValue(':ref',$ref);
        $req->bindValue(':idclient',$panier->getIdClient());
        $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

		}
		

	}
}






?>