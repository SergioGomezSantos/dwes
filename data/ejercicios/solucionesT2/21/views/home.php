<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/app.css">
    <?php 
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
            <?= $this->getName() ?>
        </h1>

        <?php 
            $this->colors();
        ?>
    </div>

</body>

</html>