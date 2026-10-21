<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3: Calculadora</title>

</head>
<body>

    <div class="contenedor">
        <?php require 'menu.php'; ?>

        <h1>Ejercicio 3: Calculadora Básica</h1>

        <div class="resultado">
            <?php
            $num1 = 7;
            $num2 = 3;

            $suma = $num1 + $num2;
            $resta = $num1 - $num2;
            $multiplicacion = $num1 * $num2;
            $division = $num1 / $num2;

            echo "<strong>El número 1: $num1</strong> <br>";
            echo "<strong>El número 2: $num2</strong> <br><br>";

            echo "Suma: $suma <br>";
            echo "Resta: $resta <br>";
            echo "Multiplicación: $multiplicacion <br>";
            echo "División: $division <br>";
            ?>
        </div>
    </div>

</body>
</html>