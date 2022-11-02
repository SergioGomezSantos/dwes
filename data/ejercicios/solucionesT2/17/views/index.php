<?php

// Si ?option del GET no está en las $options de la App, redirige sin ?option

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

    // Incluyo la cabecera, donde está el nombre de la App y el Nav con los enlaces para cambiar ?option
    include 'header.php';

    ?>

    <br>

    <?php

    // Echo <div></div> para aplicarle css

    echo "<div>";


    // Switch al parámetro option del GET. Si coincide con algun case, lanza la función correspondiente de la App

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

            // Cuando option no coincide (o no existe), echo para mostrar información básica

            echo
                "<p>Index de la Aplicación.</p>
                <p>Usa el menú para desplazarte</p>";
            break;
    }

    echo "</div>";

    ?>

</body>

</html>