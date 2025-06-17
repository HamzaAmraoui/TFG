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
$cod = $_GET['cod'];

$con=mysqli_connect("db","root","root","miapp");

if (!$con)
{
die('Error en la conexión : ');
}

$result=$con->query("select * from coches where codigo='$cod'");
while($data = mysqli_fetch_row($result)){
    echo "<table>
         <tr><td id='cab'>VERSION</td><td>$data[2]</td></tr>
         <tr><td id='cab'>PRECIO</td><td>$data[3]</td></tr>
         <tr><td id='cab'>GARANTIA</td><td>$data[4]</td></tr>
         <tr><td id='cab'>CODIGO</td><td>$data[5]</td></tr>
         <tr><td id='cab'>EXISTENCIAS</td><td>$data[6]</td></tr>

         </table>";
}

?>
</table>
</body>
