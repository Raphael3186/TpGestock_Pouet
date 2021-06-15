<?php
// Connexion BDD
require "controller/connect.php";


$req = "SELECT * FROM produits";
$resultat = $mysqli->query($req);

?>
<div class="container" id="tableau">
  <input placeholder="recherche..." id="recherche"></input>
  <table 
      id="#myTable"
      class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Code produit</th>
        <th scope="col">Nom</th>
        <th scope="col">Detail</th>
        <th scope="col">Catégorie</th>
        <th scope="col">Quantité</th>
        <th scope="col">Prix d'achat</th>
        <th scope="col">Date d'expiration</th>
        <th scope="col">Actif</th>
        <th scope="col">Editer / Supprimer</th>
      </tr>
    </thead>

    <tbody id="myTable">
    <?php
      while($champs = mysqli_fetch_assoc($resultat))
      {
          ?>
          <tr>
              <?php
              echo "<td scope='row'>".$champs["id"]."</td>";
                  echo "<td>".$champs["code_produit"]."</td>";
                  echo "<td>".$champs["nom"]."</td>";
                  echo "<td>".$champs["detail"]."</td>";
                  echo "<td>".$champs["categorie"]."</td>";
                  echo "<td>".$champs["quantite"]."</td>";
                  echo "<td>".$champs["prix_achat"]."</td>";
                  echo "<td>".$champs["date_expiration"]."</td>";
                  echo "<td>".$champs["actif"]."</td>";
                  echo "<td></td>";
              ?>
          </tr>
          <?php
      }
      ?>
    </tbody>

   

  </table>
  
  <script>
    $(document).ready(function(){
      $("#recherche").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
  </script>
 
</div>

