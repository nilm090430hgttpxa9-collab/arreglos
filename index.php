
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

    <h2>50 nuemros</h2>

    <?php
    echo implode(", ", $numero);
    ?>

</body>
</html>
