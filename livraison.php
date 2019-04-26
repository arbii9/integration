<?php 
require "header.php";
?>
<?php
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['id_livraison'];
    // search in all table columns
    // using concat mysql function
    $sql = "SELECT * FROM `livraison` WHERE id_livraison='".$valueToSearch."%'"; 
}
 else {
    $sql = "SELECT * FROM `livraison` WHERE id_livraison=''";   
}
?>



<section class="breadcrumb-area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h3 style=""> suivre vos livraisons pas a pas</h3>
               <form method="post" id="form">
	             <div >
                      <label for="id_livraison" style="top:80px;position: absolute;left:450px">id_livraison :</label>
                      <input type="text" id ="id_livraison" name="id_livraison" maxlength="9" placeholder=" code livraison" onblur="Controle(this.id)"style="top: 80px;position:absolute;"> 
                      <input type="submit" name="search" value="Filter" style="top: 80px;position:absolute;left: 750px"><br><br>

                 </div> 
	          </form>
<table class="table">
	<tr>
	<th>id_livraison</th>
	<th>id_commande</th>
	<th>adresse</th>
	<th>date</th>
	<th>suivre</th>
	</tr>
    <?php
    include "core/livraisonC.php";
    $livraison1C=new livraisonC();
    $listeLivraison=$livraison1C->afficherLivraisons($sql);
        
foreach($listeLivraison as $row)
{
 ?>
    <tr>
    <td><?PHP echo $row['id_livraison']; ?></td>
    <td><?PHP echo $row['id_commande']; ?></td>
    <td><?PHP echo $row['adresse']; ?></td>
    <td><?PHP echo $row['date']; ?></td>
    <td><?php $today = date("Y-m-d"); if( $row['date'] > $today ) { echo "En Attente !"; } else { echo "weslet"; } ?></td>
    </tr>
<?PHP
}
?> 
</table> 
                    
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->




<?php 
require "footer.php";
?>