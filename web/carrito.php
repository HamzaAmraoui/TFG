<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
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
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            transition: background-color 0.3s, transform 0.3s ease-in-out;
        }

        th {
            background-color: #007bff;
            color: white;
            font-size: 1.1em;
            text-transform: uppercase;
        }

        td {
            color: #555;
            font-size: 1.1em;
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #e7f1ff;
            transform: translateY(-2px);
        }

        .total {
            font-size: 1.5em;
            font-weight: bold;
            color: #007bff;
            margin-top: 20px;
        }

        .back-link, .logout-link {
            margin-top: 20px;
            display: inline-block;
            padding: 12px 25px;
            background-color: #007bff;
            color: white;
            font-size: 1.2em;
            text-decoration: none;
            border-radius: 5px;
            margin-right: 10px;
            transition: background-color 0.3s, transform 0.3s;
        }

        .back-link:hover, .logout-link:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }

        .error {
            color: red;
            font-size: 1.2em;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Carrito de Compras</h1>

    <?php
    if (!isset($_SESSION['status'])) {
        header('location:index.html');
    } else {
      if (isset($_GET['nom']) && isset($_GET['pre'])) {
        $nom = $_GET['nom'];
        $pre = $_GET['pre'];
    
        if (!isset($_SESSION['indice'])) {
            $_SESSION['indice'] = 0;
            $_SESSION['suma'] = 0;
        } else {
            $_SESSION['indice']++;
        }
    
        $_SESSION['carrito'][$_SESSION['indice']] = $nom;
        $_SESSION['precio'][$_SESSION['indice']] = $pre;
        $_SESSION['suma'] = $_SESSION['suma'] + $pre;
    
        header("Location: index.php");
        exit();  
    }

        if (isset($_SESSION['carrito']) && count($_SESSION['carrito']) > 0) {
            echo "<table>";
            echo "<tr><th>Producto</th><th>Precio</th></tr>";
            for ($i = 0; $i <= $_SESSION['indice']; $i++) {
                echo "<tr><td>" . $_SESSION['carrito'][$i] . "</td><td>" . $_SESSION['precio'][$i] . "</td></tr>";
            }
            echo "</table><br><br>";

            echo "<div class='total'>Total: " . $_SESSION['suma'] . "</div><br>";
            echo "<div>Productos Comprados: " . ($_SESSION['indice'] + 1) . "</div>";
        } else {
            echo "<p class='error'>No se han añadido productos al carrito.</p>";
        }
    }
    ?>

    <a href="index.php" class="back-link">Volver al inicio</a>
    <a href="cerrar.php" class="logout-link">Salir</a>
</div>

</body>
</html>
