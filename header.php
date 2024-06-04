<?php
    session_start();
    
    if (!isset($_SESSION['user'])) {
        header("Location: index.php");
        exit;
    }
    if (isset($_POST['cerrar_sesion'])) {    
        // Destruir todas las variables de sesión
        session_unset();
    
        // Destruir la sesión
        session_destroy();
    
        // Redirigir al usuario al inicio de sesión
        header("Location: index.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 5</title>
</head>
<body>
    <header class="top">
        <div class="contenedor">
            <div class="hijo1">
                <h1>Bienvenido user: <?php echo ($_SESSION['user']); ?></h1>
            </div>
            <div class="hijo2">
                <h1>Laboratorio 5</h1>
            </div>
            <div class="hijo3">
                <form action="header.php" method="post">
                    <button type="submit" name="cerrar_sesion" class="boton-cerrar-sesion">Cerrar Sesion</button>
                </form>
            </div>    
        </div>
    </header>
</body>
</html>