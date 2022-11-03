<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/app.css">
    <?php 

        // Si existe la cookie con el color, sprintf con el contenido para cambiar el color del body

        if (isset($_COOKIE['color'])) {
            echo sprintf(
                "<style>
                    body{ background-color: %s; }
                </style>"
            , $_COOKIE['color']);
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