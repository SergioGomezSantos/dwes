<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Formulario</title>
</head>

<body>
  <h1>Formulario GET</h1>
  <form name="formulario" method="GET" action="autoriza.php">
    <p>
      <label for="nombre">Nombre: </label>
      <input type="text" name="nombre" id="nombre" />
    </p>
    <p>
      <label for="surname">Apellido: </label>
      <input type="text" name="surname" id="surname" />
    </p>
    <p> Letras:
      <input type="checkbox" name="letters[]" id="letter1" value="A">
      <label for="letter1">A</label>
      <input type="checkbox" name="letters[]" id="letter2" value="B">
      <label for="letter2">B</label>
      <input type="checkbox" name="letters[]" id="letter3" value="C">
      <label for="letter3">C</label>
    </p>
    <p> Numeros:
      <input type="radio" name="number" id="number1" value="1" checked>
      <label for="number1">1</label>
      <input type="radio" name="number" id="number2" value="2">
      <label for="number2">2</label>
      <input type="radio" name="number" id="number3" value="3">
      <label for="number3">3</label>
    </p>
    <p> Color:
      <select id="color" name="color">
        <option value="Rojo">Rojo</option>
        <option value="Verde">Verde</option>
        <option value="Azul">Azul</option>
      </select>
    </p>
    <p> Colores:
      <select id="colors" name="colors[]" multiple required>
        <option value="Rojo">Rojo</option>
        <option value="Verde">Verde</option>
        <option value="Azul">Azul</option>
      </select>
    </p>
    
    <input type="hidden" name="ip" id="ip" value="<?= $_SERVER['SERVER_ADDR'] ?>">

    <button type="submit" name="send" id="send" value="send">Enviar</button>
  </form>


  <br />

  <h1>Formulario POST</h1>
  <form name="formulario" method="POST" action="autoriza.php">
    <p>
      <label for="nombre">Nombre: </label>
      <input type="text" name="nombre" id="nombre" />
    </p>
    <p>
      <label for="passwd">Contraseña: </label>
      <input type="password" name="passwd" id="passwd" />
    </p>
    <p> Letras:
      <input type="checkbox" name="letters[]" id="letter1" value="A">
      <label for="letter1">A</label>
      <input type="checkbox" name="letters[]" id="letter2" value="B">
      <label for="letter2">B</label>
      <input type="checkbox" name="letters[]" id="letter3" value="C">
      <label for="letter3">C</label>
    </p>
    <p>Numeros:
      <input type="radio" name="number" id="number1" value="1" checked>
      <label for="number1">1</label>
      <input type="radio" name="number" id="number2" value="2">
      <label for="number2">2</label>
      <input type="radio" name="number" id="number3" value="3">
      <label for="number3">3</label>
    </p>
    <p> Color:
      <select id="color" name="color">
        <option value="Rojo">Rojo</option>
        <option value="Verde">Verde</option>
        <option value="Azul">Azul</option>
      </select>
    </p>
    <p> Colores:
      <select id="colors" name="colors[]" multiple required>
        <option value="Rojo">Rojo</option>
        <option value="Verde">Verde</option>
        <option value="Azul">Azul</option>
      </select>
    </p>

    <input type="hidden" name="ip" id="ip" value="<?= $_SERVER['SERVER_ADDR'] ?>">

    <button type="submit" name="send" id="send" value="send">Enviar</button>
  </form>

  <?php
  require_once 'footer.php';
  footer();
  ?>
</body>

</html>