<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/app.css">
    <?php 
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
            <?= $this->getName() ?>
        </h1>

        <?php 
            $this->colors();
        ?>
    </div>

</body>

</html>