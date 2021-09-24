<html>
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Registro Conferencista</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<div>
<form method="post" action="asistentes.php" name="asistentes">

<table>

<tr><td align="center" style="background-color:#33A8DB;"><label>Registrar Asistentes</label></td></tr>
<tr><td><input type="text" name="nombres" placeholder="&#9000; Ingresar Nombres" required /></td></tr>
<tr><td><input type="text" name="apellidos" placeholder="&#9000; Ingresar Apellidos" required /> </td></tr>
<tr><td><input type="text" name="correo" placeholder="&#9000; Ingresar Email" required /> </td></tr>
<tr><td><input type="submit" value="Registrar" name="btnregisasis"/> </td></tr>
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

if(isset($_POST["btnregisasis"]))
{

$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["correo"];


	$sqlgrabar = "INSERT INTO jsam.asistentes (nombres,apellidos,correo) values ('$nombres','$apellidos','$correo')";
	
	if(mysqli_query($conn,$sqlgrabar))
	{
		echo "<script> alert('Asistente registrado con exito: $nombres,$apellidos'); window.location='menu.php' </script>";
	}else 
	{
		echo "Error: ".$conn->close();
        
        
	}
} 
?>