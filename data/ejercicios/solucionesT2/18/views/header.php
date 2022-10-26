<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/app.css">
  <title>App 18</title>
</head>

<body>

  <header>

    <h1>
      <?php

      echo $this->getName();

      if (isset($_SESSION['userName'])) {

        echo " | " . $_SESSION['userName'];
      }
      ?>
    </h1>

    <hr>

    <nav>
      <ul>

        <?php

        if (isset($_SESSION['userName'])) {
          
          if ($_GET['option'] !== 'menu') {
            echo '<li><a href="18.php?option=menu">Lista</a></li>';
          } else {
            echo '<li>Lista</li>';
          }
  
          if ($_GET['option'] !== 'new') {
            echo '<li><a href="18.php?option=new">Añadir</a></li>';
          } else {
            echo '<li>Añadir</li>';
          }
  
          if ($_GET['option'] !== 'delete') {
            echo '<li><a href="18.php?option=delete">Eliminar</a></li>';
          } else {
            echo '<li>Eliminar</li>';
          }
  
          if ($_GET['option'] !== 'reset') {
            echo '<li><a href="18.php?option=reset">Vaciar</a></li>';
          } else {
            echo '<li>Vaciar</li>';
          }
  
          echo '<li><a href="18.php?option=close">Salir</a></li>';
        }

        ?>
      </ul>
    </nav>

  </header>