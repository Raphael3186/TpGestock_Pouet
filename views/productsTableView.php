<?php
// Connexion BDD
require "../controller/connect.php";


$req = "SELECT * FROM produits";
$resultat = $mysqli->query($req);



while($champs = mysqli_fetch_assoc($resultat))
{
    printf("%i %s %s %s %s %i %d %s %i", $champs["id"],$champs["code_produit"],$champs["nom"],$champs["detail"],$champs["categorie"],$champs["quantite"],$champs["prix_achat"],$champs["date_expiration"],$champs["actif"]);
    echo "<br>";
}
?>