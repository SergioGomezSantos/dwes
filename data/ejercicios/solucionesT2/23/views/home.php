<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<body>

    <?php

    // Include a la cabecera, donde está el nombre de la App y el Nav con los enlaces para cambiar ?option

    include('header.php');

    echo "<div>";

    // Lanzo homeList() para mostrar los deseos
    $this->homeList();

    echo "</div>";

    ?>

</body>

</html>