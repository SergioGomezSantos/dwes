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

      // Echo para mostar el $name de la App

      echo $this->getName();


      // Compruebo si el parámetro option del GET está en el array de opciones de la App
      // Si está lo muestro junto al nombre de la App
      // Si no hay option en el GET, no muestra nada

      if (in_array($_GET['option'], $this->getOptions())) {
        echo " | " . $_GET['option'];
      }

      ?>
    </h1>

    <hr>

    <nav>
      <ul>

        <?php

        // Compruebo si el parámetro option del GET es distinto a cada valor del array opciones de la App para mostrar el texto como texto plano o como enlace
        // Tambíen lo comparo a null para indicar que está en el index
        // Los enlaces redirigen a la misma página pero con ?option=X

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