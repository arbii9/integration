<?php 
include '../config.php';

class PanierCore
{


	function GetProduit($ref)
	{
		$sql="SELECT * FROM produit WHERE reference=:ref";

		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
	
        $req->bindValue(':ref',$ref);
        $liste=$req->execute();
        return $liste;
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}
	function VerifPanier($idprod,$idclient)
	{
		$sql="SELECT * FROM panier WHERE idproduit=:id and idclient=:idclient ";
		try{
        $req=$db->prepare($sql);
	
        $req->bindValue(':id',$idprod);
        $req->bindValue(':idclient',$idclient);
        $panier=$req->execute();
        if (empty($panier)) {
        	return 0;
        }
        else {
        	return 1;
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
			$sql="INSERT INTO panier values (null,:ref,:name,:pricetotal,'1',:price,:idclient)";
			try{
        $req=$db->prepare($sql);
	
        $req->bindValue(':ref',$ref);
        $req->bindValue(':nom',$panier->getName());
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
			$sql="UPDATE panier set pricetotal=:pricetotal,quantite=:quantite where idproduit=:ref and idclient=:idclient";
			$pricetotal=$panier->getPrice()*($panier->getQuantite()+1);
			$quant=$panier->getQuantite()+1;
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