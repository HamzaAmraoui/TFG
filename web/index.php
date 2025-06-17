<?php
// Definir str_ends_with() si no existe (compatibilidad con PHP < 8)
if (!function_exists('str_ends_with')) {
    function str_ends_with($haystack, $needle) {
        return substr($haystack, -strlen($needle)) === $needle;
    }
}

// Verifica si el acceso viene desde index.html
if (!isset($_SERVER['HTTP_REFERER']) || !str_ends_with($_SERVER['HTTP_REFERER'], 'index.html')) {
    header('Location: index.html');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>¡Visca Barça!</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', sans-serif;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: linear-gradient(135deg, #004d98, #a50044); /* Azul y grana */
      color: #fff;
      text-align: center;
    }

    h1 {
      font-size: 2.5rem;
      margin-bottom: 30px;
      text-shadow: 1px 1px 4px #000;
    }

    .imagenes {
      display: flex;
      flex-direction: column;
      gap: 20px;
      align-items: center;
    }

    img {
      max-width: 80%;
      height: auto;
      border: 4px solid #fff;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.3);
      transition: transform 0.2s ease;
    }

    img:hover {
      transform: scale(1.05);
    }

    .logo-barca {
      width: 100px;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <img src="https://upload.wikimedia.org/wikipedia/en/4/47/FC_Barcelona_%28crest%29.svg" class="logo-barca" alt="FC Barcelona">
  <h1>¡Sorpresa Culé!</h1>
  <div class="imagenes">
    <img src="imagen2.png" alt="Sorpresa 1">
    <img src="imagen3.png" alt="Sorpresa 2">
  </div>
</body>
</html>
