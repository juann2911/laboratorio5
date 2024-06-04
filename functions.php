<?php
// Define la función calcularCi
function calcularCi($ci) {
    if (strlen($ci) != 8) {
        return false;
    }else{

    $ciArray = str_split($ci);
    $ciArray = array_map('intval', $ciArray);

    $ciArrayRes = ($ciArray[0] * 2) + 
                  ($ciArray[1] * 9) +
                  ($ciArray[2] * 8) +
                  ($ciArray[3] * 7) + 
                  ($ciArray[4] * 6) +
                  ($ciArray[5] * 3) +
                  ($ciArray[6] * 4);

    $resultado = ceil($ciArrayRes / 10) * 10; 
    $resultado = $resultado - $ciArrayRes;
    $digito_verificador = intval(substr($ci, 7, 1));

    return $resultado == $digito_verificador;
}
}

// Define la función mostrarDatos
function mostrarDatos($nombre, $localidad, $direccion, $telefono, $email) {
    echo "<p class='muestra-datos'>Nombre: $nombre</p>";
    echo "<p class='muestra-datos'>Localidad: $localidad</p>";
    echo "<p class='muestra-datos'>Dirección: $direccion</p>";
    echo "<p class='muestra-datos'>Teléfono: $telefono</p>";
    echo "<p class='muestra-datos'>Email: $email</p>";
}

// Define la función calcularPromedio
function calcularPromedio($nota1, $nota2, $nota3, $nota4, $nota5, $nota6, $nota7, $nota8, $nota9, $nota10) {
    $suma = $nota1 + $nota2 + $nota3 + $nota4 + $nota5 + $nota6 + $nota7 + $nota8 + $nota9 + $nota10;
    $cantidad_notas = 10; 
    $promedio = $suma / $cantidad_notas;
    echo "<p class='resultado'>El promedio de las notas es: $promedio </p>";
}

if (isset($_POST['calcular'])) {
    $nombre = $_POST['nombre'];
    $ci = $_POST['ci'];
    $localidad = $_POST['localidad'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];

    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    $nota4 = $_POST['nota4'];
    $nota5 = $_POST['nota5'];
    $nota6 = $_POST['nota6'];
    $nota7 = $_POST['nota7'];
    $nota8 = $_POST['nota8'];
    $nota9 = $_POST['nota9'];
    $nota10 = $_POST['nota10'];

   
        // Verifica la CI y muestra el resultado
        if (calcularCi($ci)) {
            echo "<p class='resultado'>CI: $ci</p>";
        } else {
            echo "<p class='resultado'>La CI no es válida.</p>";
        }
    }
             

?>
