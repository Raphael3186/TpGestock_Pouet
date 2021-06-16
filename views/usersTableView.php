<?php
// Connexion BDD
require_once "controller/connect.php";


$req = "SELECT nom, prenom, email, type, actif FROM utilisateurs";
$resultat = $mysqli->query($req);

?>
<h1>LISTE UTILISATEURS</h1>
<div class="container" id="tableau">
  <input placeholder="recherche..." id="recherche"></input>
  <table 
      id="#myTable"
      class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Nom</th>
        <th scope="col">Prénom</th>
        <th scope="col">Adresse mail</th>
        <th scope="col">Type d'utilisateur</th>
        <th scope="col">Actif</th>
      </tr>
    </thead>

    <tbody id="myTable">
    <?php
      while($champs = mysqli_fetch_assoc($resultat))
      {
          ?>
          <tr>
              <?php
                echo "<td scope='row'>".$champs["nom"]."</td>";
                echo "<td>".$champs["prenom"]."</td>";
                echo "<td>".$champs["email"]."</td>";
                echo "<td>".$champs["type"]."</td>";
                if($champs["actif"] == 1){echo "<td>Oui</td>";}else{echo "<td>Non</td>";}
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

