<?php
$servername = "localhost: 3309";
$username = "root";
$password = "";
$dbname = "login";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
   echo "Erro de conexão" . $conn->connect_error;
}
?>