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

<tr><td align="center"><h1>Listado de Eventos</h1></td></tr>
<tr><td><label>Nombre de Evento</label></td>
	<td><label>Email de Conferencista</label></td>

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
	
$sql="SELECT * FROM jsam.conferencia";
$result=mysqli_query($conn,$sql);

while($mostrar=mysqli_fetch_array($result))
{
	
?>
<tr> 
	<td><?php echo $mostrar['nombre'] ?>
    <td><?php echo $mostrar['correo'] ?>

</tr>
<?php
}



?>
</table>