<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/app.css">
  <title>App 23</title>
</head>

<body>

  <header>

    <h1>
      <?= $this->getName(); ?>
    </h1>

    <hr>

    <nav>
      <ul>

        <?php

        if (isset($_GET['option'])) {
          echo '<li><a href="23.php">Lista</a></li>';
        } else {
          echo '<li>Lista</li>';
        }

        if ($_GET['option'] !== 'new') {
          echo '<li><a href="23.php?option=new">Añadir</a></li>';
        } else {
          echo '<li>Añadir</li>';
        }

        if ($_GET['option'] !== 'delete') {
          echo '<li><a href="23.php?option=delete">Eliminar</a></li>';
        } else {
          echo '<li>Eliminar</li>';
        }

        if ($_GET['option'] !== 'reset') {
          echo '<li><a href="23.php?option=reset">Vaciar</a></li>';
        } else {
          echo '<li>Vaciar</li>';
        }

        ?>
      </ul>
    </nav>

  </header>