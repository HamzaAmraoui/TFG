<?php
$cod =$_GET['cod'];
$con=mysqli_connect("localhost","root","","concesionario");

if (!$con)
{
die('Error en la conexion : ');
}
$result=$con->query("delete from coches where codigo='$cod'");
header ('location:listado.php');

?>