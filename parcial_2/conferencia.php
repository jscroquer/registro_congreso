<html>
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Registro Conferencia</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<div>
<form method="post" action="conferencia.php" name="conferencia">

<table>

<tr><td align="center" style="background-color:#33A8DB;"><label>Registrar Conferencia</label></td></tr>
<tr><td><input type="text" name="nombre" placeholder="&#9000; Nombre de Evento" required /></td></tr>
<tr><td><input type="text" name="correo" placeholder="&#9000; Email de Conferencista" required /> </td></tr>
<tr><td><input type="submit" value="Registrar" name="btnregisevento"/> </td></tr>
<br>
<tr><td><a href="menu.php" style="float:right">Ir a Menu</a></td></tr>
</table>

</form>
</div>
</body>
</html>

<?php
include('conexion.php');

session_start();

if(isset($_POST["btnregisevento"]))
{

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];


	$sqlgrabar = "INSERT INTO jsam.conferencia (nombre,correo) values ('$nombre','$correo')";
	
	if(mysqli_query($conn,$sqlgrabar))
	{
		echo "<script> alert('Conferencia registrada con exito: $nombre'); window.location='menu.php' </script>";
	}else 
	{
		echo "Error: ".$conn->close();
        
        
	}
} 
?>