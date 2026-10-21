<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2: Condicionales</title>

</head>
<body>

    <div class="contenedor">
        <?php require 'menu.php'; ?>

        <h1>Ejercicio 2: Mayor o Menor de Edad</h1>

        <div class="resultado">
            <?php
            $edad = 30;

            echo "<strong>La edad registrada es: $edad años</strong><br><br>";

            if ($edad >= 18) {
                echo "✅ Eres mayor de edad.";
            } else {
                echo "❌ No eres mayor de edad.";
            }
            ?>
        </div>
    </div>

</body>
</html>