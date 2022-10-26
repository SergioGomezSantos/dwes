<?php

session_start();

if (!isset($_SESSION['userName'])) {
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
    include ('header.php');

    echo "<div>";
    $this->homeList($_SESSION['userName']);
    echo "</div>";
    
    ?>

</body>

</html>