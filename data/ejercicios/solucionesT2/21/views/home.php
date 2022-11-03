<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/app.css">
    <?php 

        // Si existe la sesión con el color, sprintf con el contenido para cambiar el color del body

        if (isset($_SESSION['color'])) {
            echo sprintf(
                "<style>
                    body{ background-color: %s; }
                </style>"
            , $_SESSION['color']);
        }

    ?>
</head>

<body>

    <br>

    <div>
        <h1>
            <!-- Echo para mostrar el $name de la App -->
            <?= $this->getName() ?>
        </h1>

        <?php 
            // Include para mostrar la lista en enlaces con los colores
            include('colors.php');
        ?>
    </div>

</body>

</html>