<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registro de un Libro</title>
</head>

<body>
    <form name="formulario" method="POST" action="11_read.php">
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
</body>

</html>