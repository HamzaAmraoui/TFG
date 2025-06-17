<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<meta charset="UTF-8">

<style>
#rotulo {
	width:100%;
	background-color: #27ae60 ;
	height:100px;
	color:white;
	font-family: Tahoma;
	font-size: 80px;
}
#barra {
	width:100%;
	background-color:  #e59866  ;
	height:40px;
	color:white;
	font-family: Tahoma;
	font-size: 25px;
}
#barra td{
  text-align: center;
  width:25%;
}
#blanco {
	width:100%;
	background-color:  white ;
	height:40px;
	
}
div {
	float:left;
}
a {
	text-decoration: none;
}

</style>
</head>
<body>
	<table id="rotulo">
		<tr><td>Ramirez Motor</td></tr>
	</table><td><td>
	
	<table id="barra" >
		<tr><td><a href="Index.html">ïndice</a></td><td><a href="Listado.php">Catalogo</a></td><td><a href="registro.html">Registrarse</a></td>
		</td>
    </tr>
	</table>
	<table id="blanco" >
		<tr><td></td></tr>
	</table><td><td>

    <?php
$cod =$_GET['cod'];
$con=mysqli_connect("localhost","root","","concesionario");

if (!$con)
{
die('Error en la conexiÃ³n : ');
}

$result=$con->query("select * from coches where codigo='$cod'");
while($data = mysqli_fetch_row($result))
{
   echo "<center><table WIDTH='800'>
   <tr><td>Coche</td><td>$data[0]</td></tr>
   <tr><td>Modelo</td><td>$data[1]</td></tr>
   <tr><td>Version</td><td>$data[2]</td></tr>
   <tr><td>Garantia</td><td>$data[4]</td></tr>
   <tr><td>Precio</td><td>$data[5]</td></tr>
   </center></table>
   ";
}



?>



</body>
</html>