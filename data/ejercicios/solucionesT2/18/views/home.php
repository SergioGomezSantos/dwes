<?php

// Si no tiene la cookie, redirige para ir al login

if (!isset($_COOKIE['userName'])) {
    header('Location: 18.php');
}

?>

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

    // Lanzo homeList() para mostar los deseos
    $this->homeList();

    echo "</div>";

    ?>

</body>

</html>