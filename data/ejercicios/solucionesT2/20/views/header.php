<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/app.css">
  <title>App 20</title>
</head>

<body>

  <header>

    <h1>
      <?php

      // Echo para mostar el $name de la App

      echo $this->getName();

      // Si la cookie existe, muestro el userName junto al $name de la App

      if (isset($_SESSION['userName'])) {

        echo " | " . $_SESSION['userName'];
      }
      ?>
    </h1>

    <hr>

    <nav>
      <ul>

        <?php

        // Si existe la sesión con userName, entra al bucle

        if (isset($_SESSION['userName'])) {
          
        // Compruebo si el parámetro option del GET es distinto a cada valor del array opciones de la App para mostrar el texto como texto plano o como enlace
        // Los enlaces redirigen a la misma página pero con ?option=X

          if ($_GET['option'] !== 'menu') {
            echo '<li><a href="20.php?option=menu">Lista</a></li>';
          } else {
            echo '<li>Lista</li>';
          }
  
          if ($_GET['option'] !== 'new') {
            echo '<li><a href="20.php?option=new">Añadir</a></li>';
          } else {
            echo '<li>Añadir</li>';
          }
  
          if ($_GET['option'] !== 'delete') {
            echo '<li><a href="20.php?option=delete">Eliminar</a></li>';
          } else {
            echo '<li>Eliminar</li>';
          }
  
          if ($_GET['option'] !== 'reset') {
            echo '<li><a href="20.php?option=reset">Vaciar</a></li>';
          } else {
            echo '<li>Vaciar</li>';
          }
  
          // Añado el enlace para salir
          echo '<li><a href="20.php?option=close">Salir</a></li>';
        }

        ?>
      </ul>
    </nav>

  </header>