<html>
<head>

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
	</table>
	<?php

   

    $con = mysqli_connect("localhost", "root", "", "concesionario");

    $con->set_charset("utf8");
    $result = $con->query("select * from coches");
            echo "<table  ><tr>
                <td>Coche</td>
                <td>Version</td>
                <td>MOSTRAR</td><td>BORRAR</td></tr>";
            while ($data = mysqli_fetch_row($result)) {
                echo "
            <tr>
                <td>$data[0]</td>
                <td>$data[2]</td>
                <td >
                    <a href='mostrar.php?cod=$data[5]'>
                        <img src='infor.png' width='20'>
                </td>
                    </a>
                <td >
                    <a href='borrar.php?cod=$data[5]'>
                        <img src='papelera.png' width='20'>
                    </a>
                </td>
            </tr>";
            }
            ?>
        </table>
    
    





</body>
</html>