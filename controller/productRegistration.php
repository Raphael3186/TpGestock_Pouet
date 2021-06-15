<?php
session_start();
// Lance la connexion à la BDD
require_once "../controller/connect.php";

$code = "";
$nom="";
$detail="";
$categ="";
$quantite = 0;
$prix = 0;
$dateExpi = "";


if(!empty($_POST["codeInput"]) && !empty($_POST["nomInput"]) && !empty($_POST["detailInput"]) && !empty($_POST["cateInput"]) && !empty($_POST["qteInput"]) && !empty($_POST["prixInput"]) && !empty($_POST["dateProd"]))
{
    $code = $_POST["codeInput"];
    $nom = $_POST["nomInput"];
    $detail = $_POST["detailInput"];
    $categ = $_POST["cateInput"];
    $quantite = $_POST["qteInput"];
    $prix = $_POST["prixInput"];
    $dateExpi = $_POST["dateProd"];
}

$req = "INSERT INTO produits (code_produit, nom, detail, categorie, quantite, prix_achat, date_expiration)
        VALUES ('".$code."','".$nom."','".$detail."','".$categ."',".$quantite.",".$prix.",'".$dateExpi." 00:00:00')";

if ($mysqli->query($req) === TRUE)
{
    echo "Enregistrement réussi. Vous allez être redirigés...";
    ?>
    <meta http-equiv="refresh" content="2;url=../index.php">
<?php
}
else
{
    echo "Une erreur est survenue, veuillez réessayer...";
    ?>
    <meta http-equiv="refresh" content="2;url=../views/formAddProduct.php">
<?php
}

?>