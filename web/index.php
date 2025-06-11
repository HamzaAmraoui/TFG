<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos del Almacén</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            background-image: url('Mercadona.jpg'); /* Ruta de la imagen de fondo */
            background-size: cover; /* Para cubrir toda la pantalla */
            background-position: center center; /* Centrado de la imagen */
            background-attachment: fixed; /* Para que la imagen no se desplace al hacer scroll */
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            padding-top: 50px;
        }

        .container {
            text-align: center;
            padding: 20px;
            border: 2px solid #ccc;
            border-radius: 8px;
            background-color: rgba(255, 255, 255, 0.9); /* Fondo blanco semitransparente */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 900px;
            width: 100%;
            margin-top: 20px;
        }

        h1 {
            font-size: 2.5em;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        td a {
            text-decoration: none;
        }

        .icono {
            width: 30px;
            height: 30px;
        }

        .gif-icon {
            width: 40px; /* Ajusta el tamaño del gif */
            height: 40px; /* Ajusta el tamaño del gif */
            margin-left: 10px; /* Espaciado entre el nombre y el gif */
            vertical-align: middle; /* Alineación vertical para que el gif se alinee bien con el texto */
        }

        .error {
            color: red;
            font-size: 1.2em;
        }

        .back-link {
            margin-top: 20px;
            display: block;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            font-size: 1.2em;
            text-decoration: none;
            border-radius: 5px;
        }

        .back-link:hover {
            background-color: #0056b3;
        }

        /* Estilo del botón flotante del carrito en la parte superior derecha */
        .cart-button {
            position: fixed;
            top: 20px;  /* Mover el botón hacia la parte superior */
            right: 20px;  /* Mantenemos la posición a la derecha */
            background-color: #007bff;
            padding: 15px;
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            transition: background-color 0.3s ease;
            cursor: pointer;
        }

        .cart-button:hover {
            background-color: #0056b3;
        }

        .cart-button img {
            width: 40px;
            height: 40px;
        }

        /* Estilo para el gif fijo en la esquina inferior izquierda */
        .bottom-left-gif {
            position: fixed;
            left: 20px;
            bottom: 20px;
            width: 80px;  /* Ajusta el tamaño del gif */
            height: auto;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Productos del Almacén</h1>

    <?php
    if (!isset($_SESSION['status'])) {
        header('location:index.html');
    } else {
        $servidor = "localhost";
        $usuario = "root";
        $clave = "";
        $basedatos = "almacen";
        $conn = mysqli_connect($servidor, $usuario, $clave, $basedatos) or die("Error en la conexión");

        $consulta = "SELECT * FROM almacen";
        $resultado = $conn->query($consulta);
        
        if ($resultado->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>Producto</th><th>Precio</th><th>Acción</th></tr>";
            while ($fila = $resultado->fetch_array()) {
                // Aquí hemos agregado el gif después del nombre del producto
                echo "<tr><td>$fila[0]</td><td>$fila[1] <img src='vini.gif' class='gif-icon' alt='Vini'></td><td><a href='carrito.php?nom=$fila[0]&pre=$fila[1]'><img src='icono.png' class='icono' alt='Añadir al carrito'></a></td></tr>";
            }
            echo "</table>";
        } else {
            echo "<p class='error'>No hay productos disponibles en el almacén.</p>";
        }

        $_SESSION['status'] = 1;
    }
    ?>

    <a href="index.html" class="back-link">Volver al inicio</a>
</div>

<!-- Botón flotante del carrito en la parte superior derecha -->
<a href="carrito.php" class="cart-button">
    <img src="icono.png" alt="Carrito de compras">
</a>

<!-- Gif en la esquina inferior izquierda -->
<img src="barc.gif" class="bottom-left-gif" alt="Barça">

</body>
</html>
