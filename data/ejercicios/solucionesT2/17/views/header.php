<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/app.css">
  <title>App 17</title>
</head>

<body>

  <header>

    <h1>
      <?php
      echo $this->getName();

      if (in_array($_GET['option'], $this->getOptions())) {
        echo " | " . $_GET['option'];
      }

      ?>
    </h1>

    <hr>

    <nav>
      <ul>

        <?php

        if ($_GET['option'] !== null) {
          echo '<li><a href="17.php">Index</a></li>';
        } else {
          echo '<li>Index</li>';
        }

        if ($_GET['option'] !== 'Fibonacci') {
          echo '<li><a href="17.php?option=Fibonacci">Fibonacci</a></li>';
        } else {
          echo '<li>Fibonacci</li>';
        }

        if ($_GET['option'] !== 'Factoriales') {
          echo '<li><a href="17.php?option=Factoriales">Factoriales</a></li>';
        } else {
          echo '<li>Factoriales</li>';
        }

        if ($_GET['option'] !== 'Primos') {
          echo '<li><a href="17.php?option=Primos">Primos</a></li>';
        } else {
          echo '<li>Primos</li>';
        }

        if ($_GET['option'] !== 'Potencias2') {
          echo '<li><a href="17.php?option=Potencias2">Potencias de 2</a></li>';
        } else {
          echo '<li>Potencias de 2</li>';
        }

        ?>
      </ul>
    </nav>

  </header>

</body>

</html>