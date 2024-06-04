<?php
    session_start(); // Iniciar la sesión

    $usuario = 'juan';
    $contrasenia = '12345';

    // Procesar el formulario e inicio de sesión
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $user = $_POST['user'];
        $password = $_POST['password'];

        // Verificar las credenciales del usuario
        if ( $user === $usuario && $password == $contrasenia) {
            // Establecer la variable de sesión
            $_SESSION['user'] = $user;
            // Redirigir al usuario a la página protegida
            header('Location: home.php');
            exit;
        }
    }

    
    
?>