<?php

// Lance la connexion à la BDD
require "../controller/connect.php";

$mail="";
$pwd="";

if(!empty($_POST["inputMail"]) && !empty($_POST["inputPwd"]))
{
    $mail = $_POST["inputMail"];
    $pwd = $_POST["inputPwd"];
}

/* create a prepared statement */
$stmt = $mysqli->prepare("SELECT email, mot_de_passe FROM utilisateurs WHERE email = ? AND mot_de_passe = ?");

/* bind parameters for markers */
$stmt->bind_param('ss', $mail, $pwd);

/* execute query */
$stmt->execute();

/* bind result variables */
$stmt->bind_result($test, $test2);

/* fetch value */
$stmt->fetch();


var_dump($test);
var_dump($test2);
var_dump($stmt);
?>