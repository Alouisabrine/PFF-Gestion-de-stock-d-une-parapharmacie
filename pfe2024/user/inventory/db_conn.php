<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "para";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connexion echouée: " . mysqli_connect_error());
}
// echo "Connected successfully";
