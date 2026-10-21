<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1: Bucles</title>

</head>
<body>

    <div class="contenedor">
        <?php require 'menu.php'; ?>

        <h1>Ejercicio 1: Números y Bucles</h1>

        <div class="resultado">
            <?php
            $limite = 10;

            echo "<strong>Números del 1 al $limite:</strong><br>";
            for ($i = 1; $i <= $limite; $i++) {
                echo $i . " ";
            }

            echo "<br><br><strong>Números invertidos del $limite al 1:</strong><br>";
            for ($i = $limite; $i >= 1; $i--) {
                echo $i . " ";
            }
            ?>
        </div>
    </div>

</body>
</html>