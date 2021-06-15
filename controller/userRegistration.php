<?php
session_start();
// Lance la connexion à la BDD
require_once "../controller/connect.php";

$prenom = "";
$nom="";
$mail="";
$pwd="";
$type="";


if(!empty($_POST["prenomInput"]) && !empty($_POST["nomInput"]) && !empty($_POST["mailInput"]) && !empty($_POST["pwdInput"]) && !empty($_POST["typeUser"]))
{
    $prenom = $_POST["prenomInput"];
    $nom = $_POST["nomInput"];
    $mail = $_POST["mailInput"];
    $pwd = $_POST["pwdInput"];
    $type = $_POST["typeUser"];
}

$req = "INSERT INTO utilisateurs (nom, prenom, email, mot_de_passe, type)
        VALUES ('".$prenom."','".$nom."','".$mail."','".$pwd."','".$type."')";

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
    <meta http-equiv="refresh" content="2;url=../views/formAddUser.php">
<?php
}

?>