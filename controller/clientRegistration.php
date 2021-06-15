<?php
session_start();
// Lance la connexion à la BDD
require_once "../controller/connect.php";

$prenom = "";
$nom = "";
$mail = "";


if(!empty($_POST["prenomInput"]) && !empty($_POST["nomInput"]) && !empty($_POST["mailInput"]))
{
    $prenom = $_POST["prenomInput"];
    $nom = $_POST["nomInput"];
    $mail = $_POST["mailInput"];
}

$req = "INSERT INTO utilisateurs (nom, prenom, email, mot_de_passe, type, actif)
        VALUES ('".$nom."','".$prenom."','".$mail."','client','client', 1)";

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
    <meta http-equiv="refresh" content="2;url=../views/formAddClient.php">
<?php
}

?>