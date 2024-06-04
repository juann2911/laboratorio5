<?php
include("header.php");

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="div-resultados">
    <div class="div-resultados-texto">
        <?php
        include("functions.php");
        mostrarDatos($nombre, $localidad, $direccion, $telefono, $email); 
        calcularPromedio($nota1, $nota2, $nota3, $nota4, $nota5, $nota6, $nota7, $nota8, $nota9, $nota10);
        calcularCi($ci);
        ?>
    </div>
</div>
    <div class="div-button">
        <button onclick="atras()" class="button">Atrás</button>
    </div>
</body>
</html>

<script>
    function atras() {
    window.location.href = "home.php";
}
</script>