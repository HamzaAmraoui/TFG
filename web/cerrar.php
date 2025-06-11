<?php
session_start();
session_destroy();
unset($_SESSION['status']);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gracias por su compra</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
            padding: 20px;
            border: 2px solid #ccc;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }

        h1 {
            font-size: 2.5em;
            font-weight: bold;
            color: #333;
            margin: 0;
            text-align: center;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        p {
            font-size: 1.2em;
            color: #555;
            margin-top: 10px;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            font-size: 1.2em;
            text-decoration: none;
            border-radius: 5px;
        }

        a:hover {
            background-color: #0056b3;
        }

        /* Estilo para el gif */
        .gif-container {
            margin-top: 30px; /* Espacio superior */
        }

        .gif-container img {
            width: 200px;  /* Ajusta el tamaño del gif */
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Gracias por su compra</h1>
        <p>Su sesión ha sido cerrada correctamente.</p>
        <a href="index.html">Volver</a>

        <!-- Contenedor para el gif -->
        <div class="gif-container">
            <img src="barsa.gif" alt="Gracias por su compra">
        </div>
    </div>
</body>
</html>
