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
$pro = $_GET['pro'];
$pre = $_GET['pre'];
$alm = $_GET['alm'];
$cod = $_GET['cod'];
$exi= $_GET['exi'];
$cod= $_GET['cod'];
$exi1= $_GET['exi1'];

$con=mysqli_connect("db","root","root","concesionario");

if (!$con)
{
die('Error en la conexión : ');
}
$result=$con->query("insert into coches values('$pro','$pre','$alm','$cod',$exi,'$cod',$exi1)");

if($con ->affected_rows == 1){

    header ('location:index.php');
}else{
    echo "No se ha metido los datos";
}

?>
</body>
