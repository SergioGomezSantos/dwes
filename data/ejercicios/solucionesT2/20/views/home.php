<?php

session_start();

if (!isset($_SESSION['userName'])) {
    header('Location: 20.php');
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
    $this->homeList();
    echo "</div>";
    
    ?>

</body>

</html>