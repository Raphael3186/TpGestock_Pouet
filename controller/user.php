<?php
session_start();
// Lance la connexion à la BDD
require_once "../controller/connect.php";

$mail="";
$pwd="";

if(!empty($_POST["inputMail"]) && !empty($_POST["inputPwd"]))
{
    $mail = $_POST["inputMail"];
    $pwd = $_POST["inputPwd"];
}

$req = "SELECT email, mot_de_passe FROM utilisateurs WHERE email = '".$mail."' AND  mot_de_passe = '".$pwd."'";
$resultat = $mysqli->query($req);

if($resultat->num_rows > 0)
{
    $_SESSION["user"] = $mail;
    echo "Vous êtes connectés. Vous allez être redirigé...";
    ?>
    <meta http-equiv="refresh" content="3;url=../index.php">
<?php
}
else
{
    echo "Le mail et/ou le mot est incorrect, veuillez réessayer...";
    ?>
    <meta http-equiv="refresh" content="3;url=../index.php">
<?php
}
?>