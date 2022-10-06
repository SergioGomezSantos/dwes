<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registro de un Libro</title>
</head>

<body>
    <form name="formulario" method="POST" action="">
        <p>
            <label for="title">Titulo: </label>
            <input type="text" name="title" id="title" />
        </p>
        <p>
            <label for="author">Autor: </label>
            <input type="text" name="author" id="author" />
        </p>
        <p>
            <label for="editorial">Editorial: </label>
            <input type="text" name="editorial" id="editorial" />
        </p>
        <p>
            <label for="pages">Paginas: </label>
            <input type="number" name="pages" id="pages" />
        </p>

        <button type="submit" name="send" id="send" value="send">Enviar</button>
    </form>


    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        echo "<br><hr><br>Datos Recibidos.<br><br>";

        if (isset($_POST['send']) && !empty($_POST['send'])) {

            echo "Titulo: " . (!empty($_POST['title']) ? $_POST['title'] : "-") . "<br>";
            echo "Autor: " . (!empty($_POST['author']) ? $_POST['author'] : "-") . "<br>";
            echo "Editorial: " . (!empty($_POST['editorial']) ? $_POST['editorial'] : "-") . "<br>";
            echo "Paginas: " . (!empty($_POST['pages']) ? $_POST['pages'] : "-") . "<br>";

        } else {
            echo "No viene de formulario";
        }
    } 
    ?>


</body>

</html>