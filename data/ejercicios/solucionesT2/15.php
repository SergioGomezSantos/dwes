<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Nombres[]</title>
</head>

<body>
    <form name="formulario" method="POST" action="15_read.php">
        <p>
            <label for="name1">Nombre 1: </label>
            <input type="text" name="names[]" id="name1" />
        </p>

        <p>
            <label for="name2">Nombre 2: </label>
            <input type="text" name="names[]" id="name2" />
        </p>

        <p>
            <label for="name1">Nombre 3: </label>
            <input type="text" name="names[]" id="name3" />
        </p>

        <button type="submit" name="send" id="send" value="send">Enviar</button>
    </form>
</body>

</html>