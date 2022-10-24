<?php
if (isset($_GET['option']) && !in_array($_GET['option'], $this->getOptions())) {
    header("Location: 17.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <?php
    include 'header.php';
    ?>

    <br>

    <?php

    echo "<div>";

    switch ($_GET['option']) {

        case "Fibonacci":

            $this->fibonacci();
            break;

        case "Factoriales":

            $this->factoriales();
            break;

        case "Primos":

            $this->primos();
            break;

        case "Potencias2":

            $this->potencias2();
            break;

        default:

            echo
                "<p>Index de la Aplicación.</p>
                <p>Usa el menú para desplazarte</p>";
            break;
    }

    echo "</div>";

    ?>

</body>

</html>