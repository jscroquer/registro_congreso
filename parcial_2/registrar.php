
<html>
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Registrar</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<div>
<form method="post" action="registrar.php" name="registrar">

<table>

<tr><td align="center" style="background-color:#33A8DB;"><label>Registrar</label></td></tr>
<tr><td><input type="text" name="email" placeholder="&#9000; Ingresar Email" required /></td></tr>
<tr><td><input type="password" name="pw" placeholder="&#9000; Ingresar Contraseña" required /> </td></tr>
<tr><td><hi>Fecha </hi><input type="date" name="fechar" required /></td></tr>
<tr><td><input type="submit" value="Registrar" name="btnregistrar"/> </td></tr>
<br>
<tr><td><a href="index.php" style="float:right">Iniciar Sesion</a></td></tr>
</table>



</form>
</div>
</body>
</html>

<?php
include('conexion.php');

session_start();
if(isset($_SESSION['email']))
{
	header('location: listar.php');
}

if(isset($_POST["btnregistrar"]))
{

$nombre = $_POST["email"];
$pass = $_POST["pw"];
$fechar = $_POST["fechar"];


	$sqlgrabar = "INSERT INTO jsam.registrar (email,pw,fechar) values ('$nombre','$pass','$fechar')";
	
	if(mysqli_query($conn,$sqlgrabar))
	{
		echo "<script> alert('Usuario registrado con exito: $nombre'); window.location='index.php' </script>";
	}else 
	{
		echo "Error: ".$conn->close();
        
        
	}
} 
?>