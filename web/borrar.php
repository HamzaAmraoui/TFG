<?php
$cod =$_GET['cod'];
$con=mysqli_connect("db","root","root","miapp");

if (!$con)
{
die('Error en la conexión : ');
}
$result=$con->query("delete from coches where codigo='$cod'");
header ('location:index.php');

?>
