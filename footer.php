<?php    
    if (!isset($_SESSION['user'])) {
        header("Location: index.php");
        exit;
    }
?>
<link rel="stylesheet" href="style.css">
<footer class="bottom">
    <div class="div-footer">
        <p>Desarrollado por: Juan Silveira, Valentino Cravea, Bruno Albornos, Enzo Planchón </p>
    </div>
</footer>

