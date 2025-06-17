<html>
<head>
<title></title>
<style>
 body {
            font-family: Arial, sans-serif;
            background-color: #abfee5;
            margin: 0;
            padding: 0;
        }
table
	{
		width: 800px;
	}
    td {
    	
    	height:20px;
    	font-family: tahoma;
    	font-size: 20px;
    	color:blue;
    	background-color: aqua;
    	


    }
    #cab {
    	background-color: brown;
    }
    td:hover {
    	background-color: green;

    }
    a {
    	text-decoration:none;
    	color:white;
    }
    a:active {
    	color:white;
    }
	</style>

</head>
<body>
	<center><img src="Banner1.jpg" width ="800"><br><br><br>

<?php
$con=mysqli_connect("db","root","root","concesionario");

if (!$con)
{
die('Error en la conexión : ');
}

echo "<table><form action='buscar.php' method='get'>
		<tr>
			<td>PRODUCTO</td><td><input type='text' name='bus'></td>
			<td><button><img src='lupa.png' width='20'></button></td>
			<td><a href='añadir.html'><input type='button' value='AÑADIR'></a></td>
		</tr>";

$result=$con->query("select * from coches");
echo "<table><tr ><td id='cab'>Marca</td><td id='cab'>Modelo</td><td id='cab'>MOSTRAR</td><td id='cab'>BORRAR</td><td id='cab'></tr>";
while($data = mysqli_fetch_row($result))
{
    echo "<tr>
		  <td>$data[0]</td>
		  <td>$data[1]</td>
		  <td><a href='mostrar.php?cod=$data[6]'><img src='infor.png' width='20'></a></td>
		  <td><a href='borrar.php?cod=$data[6]'><img src='papelera.png' width='20'>
		  </tr>";
}
?>
</table>
</body>
