<html>
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<div>
<form method="post" action="index.php" name="login">

<table>

<tr><td align="center"style="background-color:#33A8DB;"><label>Login</label></td></tr>
<tr><td><input type="text" name="email" placeholder="&#128273; Ingresar Email" required /></td></tr>
<tr><td><input type="password" name="pw" placeholder="&#128274; Ingresar Contraseña" required /> </td></tr>
<tr><td><input type="submit" value="Ingresar" name="btningresar"/> </td></tr>

<br>
<tr><td><a href="registrar.php" style="float:right">Crear una cuenta</a></td></tr>

</table>

</form>
</div>
</body>
</html>

<?php
include('conexion.php');

session_start();
if(isset($_SESSION['nombredelusuario']))
{
	header('location: menu.php');
}

if(isset($_POST['btningresar']))
{
	
$nombre = $_POST["email"];
$pass = $_POST["pw"];


	

	
$query = mysqli_query($conn,"SELECT * FROM jsam.registrar WHERE email = '".$nombre."' and pw = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
	$_SESSION['email']=$nombre;
	header("Location: menu.php");
}
else if ($nr == 0) 
{
	echo "<script> alert('Usuario no existe');window.location= 'index.php' </script>";
}

} 
?>

