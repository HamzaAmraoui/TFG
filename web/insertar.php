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
<center><img src="banner.jpg" width ="800"><br><br><br>

<?php
$marca = $_GET['pro'];
$modelo = $_GET['pre'];
$version = $_GET['alm'];
$precio = $_GET['exi'];
$garantia = $_GET['gar'];   
$codigo = $_GET['cod'];
$existencias = $_GET['exi1'];

$con = mysqli_connect("db", "root", "root", "concesionario");

if (!$con) {
    die('Error en la conexión : ' . mysqli_connect_error());
}

$query = "INSERT INTO coches (marca, modelo, version, precio, garantia, codigo, existencias) 
          VALUES ('$marca', '$modelo', '$version', $precio, $garantia, '$codigo', $existencias)";

$result = $con->query($query);

if ($con->affected_rows == 1) {
    header('Location: index.php');
} else {
    echo "No se ha podido insertar el coche.";
}
?>
</body>
