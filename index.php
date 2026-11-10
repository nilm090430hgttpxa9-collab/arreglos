
<?php
$numero = array();

for ($i = 0; $i < 50; $i++) {
    $numero[] = rand(1, 100);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <h2>50 numeros</h2>

    <?php
    echo implode(", ", $numero);
    ?>

    <br><br>
    <form method="POST">
        <button type="submit" name="boton">Los 3 numeros mas grandes</button>
    </form>

    <?php
        if (isset($_POST['boton'])) {
            $mayor = $numero;
            rsort($mayor);

            echo "<h2>Los 3 numeros mas grandes:</h2>";
            echo implode(", ", array_slice($mayor, 0, 3));
        }
    ?>

</body>
</html>
