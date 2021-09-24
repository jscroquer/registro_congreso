<link rel="stylesheet" href="style.css">

<table>
<?php
include('conexion.php');
session_start();

if(isset($_SESSION['email']))
{
	$usuarioingresado = $_SESSION['email'];
	echo "<tr><td colspan='2' align='center'><h1>Bienvenido: $usuarioingresado </h1></td></tr>";
}
else
{
	header('location: index.php');
}
?>
<form method="POST">
<tr><td colspan='2' align="center"><input type="submit" value="Cerrar sesión" name="btncerrar" /></td></tr>
<tr><td colspan='2' align="center"><input type="submit" value="Ir a Menu" name="btnregresar" /></td></tr>
</form>

<tr><td colspan="2"><h1>Listado de Conferencistas</h1></td></tr>
<tr><td><label>Nombres</label></td>
	<td><label>Apellidos</label></td>
	<td><label>Profesion</label></td>
	<td><label>Biografia</label></td>

</tr>

<?php 

if(isset($_POST['btncerrar']))
{
	session_destroy();
	header('location: index.php');
}

if(isset($_POST['btnregresar']))
{
	header('location: menu.php');
} 
	
$sql="SELECT * FROM jsam.conferencistas";
$result=mysqli_query($conn,$sql);

while($mostrar=mysqli_fetch_array($result))
{
	
?>
<tr> 
	<td><?php echo $mostrar['nombres'] ?>
	<td><?php echo $mostrar['apellidos'] ?>
	<td><?php echo $mostrar['profesion'] ?>
	<td><?php echo $mostrar['biografia'] ?>

</tr>
<?php
}



?>
</table>