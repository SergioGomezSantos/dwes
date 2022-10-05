<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Información Básica</title>
  <link rel="stylesheet" href="css/info.css">
</head>

<body>
  <header>
    <h1>Información</h1>
    <hr>
  </header>
  <section>
    <article>
      <header>
        <h2><a href="variables.php">Variables</a></h2>
        <ul>
          <li>Variables alfanumericas, sin caracteres especiales excepto "_"</li>
          <li>No empezar por números ni "_"</li>
          <li>int, string, boolean, float, array, object, recursos</li>
          <li>Tipado débil, no hace falta indicar el tipo de dato de las variables</li>
          <li>gettype()</li>
          <li>CaseSensitive en variables, no en metodos $var != $VAR | METHOD() == method()</li>
          <li>Constantes en mayúsculas y sin $</li>
        </ul>
      </header>
    </article>
    <hr>
    <article>
      <header>
        <h2><a href="operadores.php">Operadores</a></h2>
      </header>
      <ul>
        <li>= | < |> | != | <> | == | === | <=>
        </li>
      </ul>
    </article>
    <hr>
    <article>
      <header>
        <h2>Bucles</h2>
      </header>
      <ul>
        <li>if(){}</li>
        <li>if()else{}</li>
        <li>if()elseif(){}else{}</li>
        <br>
        <li>while(){}</li>
        <li>do{}while()</li>
        <br>
        <li>for($i = 0 ; $i < 10 ; $i++){$array[$i]}</li> <li>foreach($array as $element){}</li>
        <li>foreach($array as $clave => $valor){} </li>
      </ul>
    </article>
    <hr>
    <article>
      <header>
        <h2>Control</h2>
      </header>
      <ul>
        <li>include, include_once, require, requier_once</li>
      </ul>
    </article>
  </section>

  <?php
  include_once 'footer.php';
  footer();
  ?>
</body>

</html>