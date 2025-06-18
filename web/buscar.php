<html>
<head>
<title></title>
<style>
table {
		width:800px;
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
<center><img src="Banner1.jpg" width ="800"><br><br><br>

<?php

$pro = $_GET['bus'];
$con=mysqli_connect("db","root","root","concesionario");

if (!$con)
{
die('Error en la conexión : ');
}
echo "<table>";
$result=$con->query("select * from coches where marca like'%$pro%'");
while($data = mysqli_fetch_row($result)){
    echo "<tr><td>$data[0]</td><td>$data[2]</td>
    <td><a href='borrar.php?cod=$data[3]'><img src='papelera.png' width='20'></a></td>
    <td><a href='mostrar.php?cod=$data[3]'><img src='infor.png' width='20'</tr>";
}
echo "</table>";
?>
</body>
