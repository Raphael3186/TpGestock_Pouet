<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "gestion_stock";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $database);

// Check connection
if ($mysqli->connect_error)
{
    die("La connexion a échoué: " . $mysqli->connect_error);
}
?>