<?php
$set="";
session_start();

$idclient=$_SESSION['cin'];
//require 'header.php';

?>
<!-- annimation des images-->
<table>
  <tr>
    <th>Image</th>
    <th>Nom Produit</th>
    <th>Quantite</th>
    <th>Prix Unitaire</th>
    <th>Prix Total</th>
    <th>Action</th>
  </tr>
  <?php
  require '_header.php';  
        $products=$DB->query('SELECT *,sum(p.quantite) as quantite FROM panier p , products pr where p.idproduit=pr.id and p.idclient ="'.$idclient.'" group by p.idproduit');
      //$products=$DB->query('SELECT *,sum(p.quantite) as quantite FROM panier p , products pr where p.idproduit=pr.id  group by p.idproduit');
      if(empty($products))
    {
        ?>
        <h1 class="paniervide">aucun resultat</h1>
        <?php
    } 
    else
    {
      foreach ($products as $product){
    
  echo '<tr><form action="update_panier.php" method="get">
    <input type="hidden" name="id" value="'.$product->id.'"/>

    <td><img src="'.$product->img.'" class="panierpic"></td>
    <td>'.$product->name.'</td>
    <td><input type="number" size="30" min="1" max="99" name="quantite" value="'.$product->quantite.'" id="qte"></td>
    <td><span  id="prix" name="prix">'.$product->price.'</span><span id="tnd" class="tnd">TND</span></td>
    <td id="total"><span>'.$product->quantite * $product->price.'</span><span id="tnd" class="tnd">TND</span></td>
    <td><button><a href="retirer_panier.php?id='.$product->id.'">retirer</button></a><input type="submit" value="update"/></td></tr></form>';
}
    }

     
?>
</table>