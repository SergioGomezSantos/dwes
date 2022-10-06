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
        <h2 id="Variables"><a href="variables.php">Variables</a></h2>
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
        <h2 id="Operadores"><a href="operadores.php">Operadores</a></h2>
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
        <br />
        <li>while(){}</li>
        <li>do{}while()</li>
        <br />
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
    <hr>
    <article>
      <header>
      <h2 id="Objetos"><a href="webAsignaturas.php">Objetos</a></h2>
      </header>
      <ul>
        <li>Sobrescritura de métodos</li>
        <ul>
          <li>Mismo nombre con mismo número de parámetros, diferente comportamiento</li>
        </ul>
        <br />
        <li>Polimorfismo</li>
        <ul>
          <li>Objeto que se comporta como otro</li>
          <li>Casting | Sobrescritura | Sobrecarga | Ligadura dinámica</li>
        </ul>
        <br />
        <li>Sobrecarga de métodos</li>
        <ul>
          <li>Mismo nombre con diferente número de parámetros</li>
        </ul>
        <br />
        <li>Sobrecarga de construcciones</li>
        <ul>
          <li>Diferentes constructores con mismo nombre, diferentes parámetros</li>
        </ul>
        <br />
        <li>En PHP</li>
        <ul>
          <li>Si => Sobrescritura | Polimorfismo</li>
          <li>No => Sobrecarga de métodos | Sobrecarga de Constructores</li>
          <br />
          <li>Notaciones</li>
          <ul>
            <li>Nombre clases: UpperCamelCase (PascalCase)</li>
            <li>Nombre métodos: lowerCamelCase</li>
          </ul>
        </ul>
      </ul>
    </article>
  </section>

  <?php
  include_once 'footer.php';
  footer();
  ?>
</body>

</html>