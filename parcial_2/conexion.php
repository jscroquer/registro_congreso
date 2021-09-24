<?php
$servername = "localhost";
$username ="jsam";
$password = "jsam";

$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
die("Fallo conectarse por: " . mysqli_connect_error());
}
?>
