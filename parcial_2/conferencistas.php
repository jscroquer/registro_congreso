<html>
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Registro Conferencista</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<div>
<form method="post" action="conferencistas.php" name="conferencistas">

<table>

<tr><td align="center" style="background-color:#33A8DB;"><label>Registrar Conferencistas</label></td></tr>
<tr><td><input type="text" name="nombres" placeholder="&#9000; Ingresar Nombres" required /></td></tr>
<tr><td><input type="text" name="apellidos" placeholder="&#9000; Ingresar Apellidos" required /> </td></tr>
<tr><td><input type="text" name="profesion" placeholder="&#9000; Ingresar Profesion" required /> </td></tr>
<tr><td><input type="text" name="biografia" placeholder="&#9000; Ingresar Biografia" required /> </td></tr>
<tr><td><input type="text" name="correo" placeholder="&#9000; Ingresar Email" required /> </td></tr>
<tr><td><input type="submit" value="Registrar" name="btnregisconfer"/> </td></tr>
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

if(isset($_POST["btnregisconfer"]))
{

$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$profesion = $_POST["profesion"];
$biografia = $_POST["biografia"];
$correo = $_POST["correo"];


	$sqlgrabar = "INSERT INTO jsam.conferencistas (nombres,apellidos,profesion,biografia,correo) values ('$nombres','$apellidos','$profesion','$biografia','$correo')";
	
	if(mysqli_query($conn,$sqlgrabar))
	{
		echo "<script> alert('Conferencista registrado con exito: $nombres,$apellidos'); window.location='menu.php' </script>";
	}else 
	{
		echo "Error: ".$conn->close();
        
        
	}
} 
?>